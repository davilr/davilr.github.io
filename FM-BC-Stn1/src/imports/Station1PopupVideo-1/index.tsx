import imgClose1 from "./5c0a326bfbd3ca27e73d36d8ea3fdfd8f8c53b1b.png";

function FrameVid() {
  return (
    <div className="-translate-x-1/2 -translate-y-1/2 absolute content-stretch flex flex-col h-[517px] items-center justify-center left-1/2 overflow-clip rounded-[25px] top-[calc(50%-24.5px)] w-[941px]" data-name="Frame Vid">
      <div className="h-[543px] relative rounded-[25px] shrink-0 w-[965px]" data-name="(stn 1) plantation to bean 1" />
    </div>
  );
}

export default function Station1PopupVideo() {
  return (
    <div className="bg-[#fff3e4] drop-shadow-[0px_0px_25px_rgba(0,0,0,0.6)] relative rounded-[50px] size-full" data-name="station 1_popup video">
      <FrameVid />
      <div className="absolute left-[958px] size-[67px] top-[-21px]">
        <svg className="absolute block inset-0 size-full" fill="none" height="67" preserveAspectRatio="none" viewBox="0 0 67 67" width="67">
          <circle cx="33.5" cy="33.5" fill="white" id="Ellipse 4" r="33.5" />
        </svg>
      </div>
      <button className="absolute block cursor-pointer left-[979px] size-[25px] top-0" data-name="close 1">
        <img alt="" className="absolute inset-0 max-w-none object-cover opacity-80 pointer-events-none size-full" src={imgClose1} />
      </button>
      <div className="[word-break:break-word] absolute font-['Beiruti:Regular',sans-serif] font-normal leading-[0] left-[59px] text-[#563703] text-[22px] top-[561px] w-[899px] whitespace-pre-wrap">
        <p className="leading-[24px] mb-0">{`Cocoa beans are harvested using a machete, and subsequently fermented and dried. `}</p>
        <p className="leading-[24px]">Did you know? Centuries later, we’re still preparing cocoa beans the same way the Mayans did in the past!</p>
      </div>
    </div>
  );
}