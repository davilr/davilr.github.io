(function($) {
    "use strict";
    
    $.fn.cpWizard = function(options) {
        var vm                      = this,
            element                 = $(vm),
            _CSS_TAB                = "",
            _CSS_TAB_PASSED         = "passed",
            _CSS_TAB_ACTIVE         = "active",
            _SELECTOR_WIZARD        = ".multistep-wizard",
            _SELECTOR_TABSTRIP      = ".steps",
            _SELECTOR_TAB           = ".step",
            _SELECTOR_PROGRESSBAR   = ".progress .progress-bar",
            _SELECTOR_PAGER         = '.pager';

        var defaults = {
            tabClass: _CSS_TAB,
            onTabClick: function(tab, navigation, currIndex, targetIndex) {
                return _onTabClick(tab, navigation, currIndex, targetIndex);
            },
            onTabShow: function(tab, navigation, currIndex) {
                element.trigger("tabShow", [tab, navigation, currIndex]);
            },
        };

        var settings = $.extend({}, defaults, options);
        
        // models
        vm.$wizard          = _construct(settings);
        vm.completedSteps   = [];

        // methods
        vm.getInstance      = getInstance;
        vm.getStepCount     = getStepCount;
        vm.invokeAction     = invokeAction;
        vm.getStepsInstance = getStepsInstance;

        // event listeners
        element.on("tabShow", function(e, tab, navigation, index) {
            _updateTabs(tab, navigation, index);
        });
        
        return vm;

        /***************************************************
        * Methods
        **************************************************/

        /**
        * Constructs an instance of Bootstrap Wizard.
        * @param {string} selector - Selector in DOM that represents wizard.
        * @param {Object} options - Map of configuration values for Bootstrap Wizard.
        * @return {JQuery} JQuery object of wizard.
        */
        function _construct(options) {
            var wizardInstance = element.bootstrapWizard(options);
            return wizardInstance;
        }

        /**
        * Retrieves the JQuery Object of this wizard.
        * @return {JQuery} JQuery object of wizard.
        */
        function getInstance() {
            return vm.$wizard;
        }

        /**
        * Retrieves the number of steps in this wizard.
        * @return {number} Number of steps.
        */
        function getStepCount() {
            var $steps = $(element).find(_SELECTOR_TABSTRIP).find("li:not(.hidden)");
            return $steps.length;
        }

        /**
        * Invokes a Bootstrap Wizard method for the current instance.
        * @param {string} action - Method name.
        * @param {any} arg - Argument to be used with method.
        */
        function invokeAction(action, arg) {
            if (!arg) {
                $(element).bootstrapWizard(action);
            } else {
                $(element).bootstrapWizard(action, arg);
            }
        }

        /**
         * Retrieves the JQuery object of steps in wizard.
         * @return {JQuery} JQuery object of steps,
         */
        function getStepsInstance() {
            return $(vm.getInstance().find(_SELECTOR_TABSTRIP)[0]);
        }

        /**
         * Proxy function to provide a default behavior for "onTabClick".
         * @param {object} tab          - DOM object of step.
         * @param {object} navigation   - DOM object of steps.
         * @param {number} currIndex    - Index of current step.
         * @param {number} targetIndex  - Index of clicked step.
         * @return {boolean} Whether tab can be activated.
         */
        function _onTabClick(tab, navigation, currIndex, targetIndex) {
            var canActivate = vm.completedSteps.indexOf(targetIndex) > -1;

            if (canActivate) {
                $(navigation).find('li:gt(' + targetIndex + ')').removeClass(_CSS_TAB_PASSED);

                vm.completedSteps = vm.completedSteps
                                        .filter(function(val) { return val <= targetIndex; });
            }

            return canActivate;
        }

        /**
         * Updates the display of all steps.
         * @param {object} tab          - DOM object of step.
         * @param {object} navigation   - DOM object of steps.
         * @param {number} currIndex    - Index of current step.
         */
        function _updateTabs(tab, navigation, currIndex) {
            var $steps;
            var steps = [];
            var total = $(navigation).find("li:not(.hidden)").length - 1;
            var current = currIndex;
            var percent = (current / total) * 100;
            var $progressBar = $(navigation).parents(_SELECTOR_WIZARD).find(_SELECTOR_PROGRESSBAR);
            
            // update progress bar display
            $progressBar.css({
                width: percent + '%'
            });

            // clear completed steps after current step
            vm.completedSteps = vm.completedSteps.filter(function(val) {
                return val <= currIndex;
            });

            // get list of preceding steps (incl. current)
            for (var i = 0; i <= currIndex; i++) {
                steps.push(i);
            }
            // include preceding and current step as completed steps
            steps.forEach(function(val, index, array) {
                // if not existing, include it
                if (vm.completedSteps.indexOf(val) === -1) {
                    vm.completedSteps.push(val);
                }
            });

            // update display of steps
            $steps = vm.getStepsInstance().find(_SELECTOR_TAB);
            $($steps).each(function(index, elem) {
                // if completed step
                if (vm.completedSteps.indexOf(index) > -1 && index < currIndex) {
                    // set as a passed step
                    $(elem).addClass(_CSS_TAB_PASSED);
                }
                // if current step
                else if (vm.completedSteps.indexOf(index) > -1 && index === currIndex) {
                    // set as a passed step
                    $(elem).addClass(_CSS_TAB_ACTIVE);
                }
                else {
                    // clear its status
                    $(elem).removeClass(_CSS_TAB_PASSED);
                    $(elem).removeClass(_CSS_TAB_ACTIVE);
                }
            });
        }
    };
})(jQuery);