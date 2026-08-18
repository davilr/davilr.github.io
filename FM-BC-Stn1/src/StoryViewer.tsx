import { useRef, useState, useCallback, useEffect } from "react";
import St1ReferenceContent from "./imports/St1ReferenceContent/index";
import Station1Popup1 from "./imports/Station1Popup1/index";
import Station1Popup2 from "./imports/Station1Popup2/index";
import Station1PopupVideo from "./imports/Station1PopupVideo-1/index";

const CANVAS_WIDTH = 10844;
const CANVAS_HEIGHT = 1080;
const SCROLL_STEP = 1920;
const DRAG_THRESHOLD = 6; // px — below this it's a click, not a drag

// ── Canvas-space click zones ─────────────────────────────────────────────────
const ZONE_POPUP1 = { left: 100,  top: 430, width: 600, height: 430 };
// ToMove is 11 483 px wide (canvas 10844 + bleeds), so 50% inside it = 5741 px
// in canvas coords (ToMove left edge = −6.5 px).
// Van Houten centre = −6.5 + 5741 − 165 = 5570 px; arc left ≈ 5378 px
const ZONE_POPUP2 = { left: 5350, top: 420, width: 450, height: 660 };
// Video thumbnail centre = −6.5 + 5741 + 1479 = 7214 px; width ≈ 604 px
const ZONE_VIDEO  = { left: 6880, top: 430, width: 660, height: 480 };

// Popup display sizes
const POPUP1_W = 1249; const POPUP1_H = 820;
const POPUP2_W = 1249; const POPUP2_H = 820;
const POPUPV_W = 1025; const POPUPV_H = 625;

const VIDEO_URL = "https://www.youtube.com/embed/G3BquaqEmUc?autoplay=1";

type ModalId = "popup1" | "popup2" | "video" | null;

function Backdrop({ onClose }: { onClose: () => void }) {
  return (
    <div
      onClick={onClose}
      style={{ position: "fixed", inset: 0, zIndex: 40, background: "rgba(0,0,0,0.55)" }}
    />
  );
}

function ModalShell({ width, height, children }: { width: number; height: number; children: React.ReactNode }) {
  return (
    <div style={{ position: "fixed", inset: 0, zIndex: 50, display: "flex", alignItems: "center", justifyContent: "center", pointerEvents: "none" }}>
      <div style={{ width, height, position: "relative", pointerEvents: "auto" }}>
        {children}
      </div>
    </div>
  );
}

function Popup1Modal({ onClose }: { onClose: () => void }) {
  return (
    <>
      <Backdrop onClose={onClose} />
      <ModalShell width={POPUP1_W} height={POPUP1_H}>
        <div className="relative size-full">
          <Station1Popup1 />
          <button onClick={onClose} aria-label="Close" style={{ position: "absolute", left: 1213, top: 8, width: 32, height: 32, cursor: "pointer", background: "transparent", border: "none", zIndex: 10 }} />
        </div>
      </ModalShell>
    </>
  );
}

function Popup2Modal({ onClose }: { onClose: () => void }) {
  return (
    <>
      <Backdrop onClose={onClose} />
      <ModalShell width={POPUP2_W} height={POPUP2_H}>
        <div className="relative size-full">
          <Station1Popup2 />
          <button onClick={onClose} aria-label="Close" style={{ position: "absolute", left: 1213, top: 8, width: 32, height: 32, cursor: "pointer", background: "transparent", border: "none", zIndex: 10 }} />
        </div>
      </ModalShell>
    </>
  );
}

function VideoModal({ onClose }: { onClose: () => void }) {
  return (
    <>
      <Backdrop onClose={onClose} />
      <ModalShell width={POPUPV_W} height={POPUPV_H}>
        <div className="relative size-full">
          <Station1PopupVideo />
          {/* Iframe sits over FrameVid: left-1/2 -translate-x-1/2, top calc(50%-24.5px) -translate-y-1/2, 941×517 */}
          <div style={{ position: "absolute", left: "50%", top: "calc(50% - 24.5px)", transform: "translate(-50%, -50%)", width: 941, height: 517, borderRadius: 25, overflow: "hidden", zIndex: 5 }}>
            <iframe src={VIDEO_URL} allow="autoplay; fullscreen" style={{ width: "100%", height: "100%", border: "none" }} title="Plantation to Bean" />
          </div>
          {/* Close button matches import: left 979px, top 0, size 25px */}
          <button onClick={onClose} aria-label="Close" style={{ position: "absolute", left: 979, top: 0, width: 25, height: 25, cursor: "pointer", background: "transparent", border: "none", zIndex: 20 }} />
        </div>
      </ModalShell>
    </>
  );
}

function Zone({ zone, label, onClick }: { zone: { left: number; top: number; width: number; height: number }; label: string; onClick: () => void }) {
  return (
    <div
      role="button"
      aria-label={label}
      onClick={onClick}
      style={{ position: "absolute", left: zone.left, top: zone.top, width: zone.width, height: zone.height, cursor: "pointer", zIndex: 10 }}
    />
  );
}

export default function StoryViewer() {
  const scrollRef = useRef<HTMLDivElement>(null);
  const [modal, setModal] = useState<ModalId>(null);

  // Drag state — plain object ref, no re-render needed
  const drag = useRef({ active: false, startX: 0, scrollLeft: 0, moved: false });

  const closeModal = useCallback(() => setModal(null), []);
  const openPopup1 = useCallback(() => setModal("popup1"), []);
  const openPopup2 = useCallback(() => setModal("popup2"), []);
  const openVideo  = useCallback(() => setModal("video"),  []);

  const scrollRight = useCallback(() => {
    scrollRef.current?.scrollTo({ left: SCROLL_STEP, behavior: "smooth" });
  }, []);

  // Attach scroll handler to the imported arrow button
  useEffect(() => {
    const btn = document.querySelector<HTMLButtonElement>('[data-name="arrow icon"]');
    if (!btn) return;
    btn.addEventListener("click", scrollRight);
    return () => btn.removeEventListener("click", scrollRight);
  }, [scrollRight]);

  // Global mousemove / mouseup so drag works even when pointer leaves the container
  useEffect(() => {
    const onMove = (e: MouseEvent) => {
      if (!drag.current.active) return;
      const dx = e.clientX - drag.current.startX;
      if (Math.abs(dx) > DRAG_THRESHOLD) drag.current.moved = true;
      scrollRef.current!.scrollLeft = drag.current.scrollLeft - dx;
    };
    const onUp = () => {
      drag.current.active = false;
      if (scrollRef.current) scrollRef.current.style.cursor = "grab";
    };
    window.addEventListener("mousemove", onMove);
    window.addEventListener("mouseup", onUp);
    return () => {
      window.removeEventListener("mousemove", onMove);
      window.removeEventListener("mouseup", onUp);
    };
  }, []);

  // Escape to close modal
  useEffect(() => {
    const handler = (e: KeyboardEvent) => { if (e.key === "Escape") closeModal(); };
    window.addEventListener("keydown", handler);
    return () => window.removeEventListener("keydown", handler);
  }, [closeModal]);

  return (
    <>
      {modal === "popup1" && <Popup1Modal onClose={closeModal} />}
      {modal === "popup2" && <Popup2Modal onClose={closeModal} />}
      {modal === "video"  && <VideoModal  onClose={closeModal} />}

      <div
        ref={scrollRef}
        className="story-scroll" style={{ width: "100vw", height: "min(100vh, 1080px)", overflowX: "auto", backgroundColor: "#3b2106", cursor: "grab", userSelect: "none" }}
        onMouseDown={(e) => {
          drag.current = { active: true, startX: e.clientX, scrollLeft: scrollRef.current!.scrollLeft, moved: false };
          (e.currentTarget as HTMLElement).style.cursor = "grabbing";
        }}
        // If the mouse moved enough to count as a drag, swallow the upcoming click
        // in the capture phase so Zone divs / buttons never see it.
        onClickCapture={(e) => {
          if (drag.current.moved) {
            e.stopPropagation();
            drag.current.moved = false;
          }
        }}
      >
        <div
          style={{ width: CANVAS_WIDTH, height: CANVAS_HEIGHT, position: "relative", flexShrink: 0, overflow: "hidden" }}
          onDoubleClick={() => scrollRef.current?.scrollTo({ left: 0, behavior: "smooth" })}
        >
          <St1ReferenceContent />

          <Zone zone={ZONE_POPUP1} label="Open cocoa info popup"       onClick={openPopup1} />
          <Zone zone={ZONE_POPUP2} label="Open chocolate bar popup"     onClick={openPopup2} />
          <Zone zone={ZONE_VIDEO}  label="Play plantation to bean video" onClick={openVideo}  />
        </div>
      </div>
    </>
  );
}
