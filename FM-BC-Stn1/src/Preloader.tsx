import { useEffect, useState } from "react";
import imgBackgroundPaper from "./imports/Preloader/ecefc3c3a5f5061e32a18755c12398aee5c9d87e.png";
import imgCocoaPod from "./imports/Preloader/b45afd43d51d0221c80a905b19bb7272442da586.png";

// All heavy images to preload
const IMAGE_URLS: string[] = [
  new URL("./imports/St1ReferenceContent/6562f3934a8011a06456551ce4172d4ce6c62910.png", import.meta.url).href,
  new URL("./imports/St1ReferenceContent/b5fe24f8baf14dcfd575eb45c8913bad254b1d6a.png", import.meta.url).href,
  new URL("./imports/St1ReferenceContent/ecefc3c3a5f5061e32a18755c12398aee5c9d87e.png", import.meta.url).href,
  new URL("./imports/St1ReferenceContent/e9fbdaa5d3deafbf961401faaaec4355bc1b7088.png", import.meta.url).href,
  new URL("./imports/St1ReferenceContent/0e79d576441c9a2639f853607ffaa21251298ebb.png", import.meta.url).href,
  new URL("./imports/St1ReferenceContent/888f8ee8603d9784bb4a6e72e407242dabdce339.png", import.meta.url).href,
  new URL("./imports/St1ReferenceContent/b7e105cceb83bd663cf8bc297f6d89ec47c8080d.png", import.meta.url).href,
  new URL("./imports/St1ReferenceContent/02e2376c719de643edefc15cf82be1738628099e.png", import.meta.url).href,
  new URL("./imports/St1ReferenceContent/517a2658e264d5f377a28a0ff106ced2f196f147.png", import.meta.url).href,
  new URL("./imports/St1ReferenceContent/787b4cc0e10b7dec8fc963cdcd4d5404f3128cca.png", import.meta.url).href,
  new URL("./imports/St1ReferenceContent/d84a5d6026b2e3f5f6f4d7c4f0a09adb5de1d997.png", import.meta.url).href,
  new URL("./imports/St1ReferenceContent/7813bca819094c176619670cf1f1cb55a1273ebc.png", import.meta.url).href,
  new URL("./imports/St1ReferenceContent/08da7d4d2a91824d35bcd938a3d73eb38e6f5b4b.png", import.meta.url).href,
  new URL("./imports/St1ReferenceContent/5fa44c03132be971af8d886b6c7761fa96d7a113.png", import.meta.url).href,
  new URL("./imports/St1ReferenceContent/a865450c31650f67db7588db099991e539054eb6.png", import.meta.url).href,
  new URL("./imports/St1ReferenceContent/5c96fd6aaa96228e568bd4246737570dc4b67db0.png", import.meta.url).href,
  new URL("./imports/St1ReferenceContent/b45afd43d51d0221c80a905b19bb7272442da586.png", import.meta.url).href,
  new URL("./imports/St1ReferenceContent/40d8e0b22f59f3534d5fed2543160f5c738b53e6.png", import.meta.url).href,
  new URL("./imports/St1ReferenceContent/5febae254f6b552ec61bf3d0624c38e055e600e0.png", import.meta.url).href,
  new URL("./imports/St1ReferenceContent/87e6e756e99908cf08a8f12ed839cdd010f8ce2c.png", import.meta.url).href,
  new URL("./imports/St1ReferenceContent/f8907b03592d02a1aa561ca4a8a62b9fd9576afc.png", import.meta.url).href,
  new URL("./imports/St1ReferenceContent/f100ec852fb6a4614938b68a22503c0a0cee4f6e.png", import.meta.url).href,
  new URL("./imports/St1ReferenceContent/0ea876ece3bf2ebc1ee822540e9f0e77f68f1daf.png", import.meta.url).href,
  new URL("./imports/St1ReferenceContent/b3746c57cf1800ba9acc0057228530ab882a351c.png", import.meta.url).href,
  new URL("./imports/St1ReferenceContent/a380942bd75cba5722aed626393ce812c618ad6d.png", import.meta.url).href,
  new URL("./imports/St1ReferenceContent/cda4050f13cba740b75af662c5152b33b6b40de2.png", import.meta.url).href,
  new URL("./imports/St1ReferenceContent/4d1565cfb830ec84fff95301caf5773f6b12f97d.png", import.meta.url).href,
  new URL("./imports/Station1Popup1/74562be368134d43e5fe0679eace279088a607b0.png", import.meta.url).href,
  new URL("./imports/Station1Popup1/b0d24aa1edb91c37bef191e55a57e9e11a96398e.png", import.meta.url).href,
  new URL("./imports/Station1Popup1/5656d692cda811995094ddb988afd4794340a37f.png", import.meta.url).href,
  new URL("./imports/Station1Popup1/5813f14265c7f698709b1ffb25935887af9a53bc.png", import.meta.url).href,
  new URL("./imports/Station1Popup2/4439307895d39ae3b7b446e1536dc5c97441fda3.png", import.meta.url).href,
  new URL("./imports/Station1Popup2/9f3a1c4bc8029e479f345dc51ab1defd29628190.png", import.meta.url).href,
  new URL("./imports/Station1Popup2/6b3d9e2cd81bcc9ba82e34013500bc7ef241a09c.png", import.meta.url).href,
  new URL("./imports/Station1Popup2/ea486b6ed5e0918f74e09ce2fd3831ed5bcc89d7.png", import.meta.url).href,
];

const TOTAL = IMAGE_URLS.length;
// 12 dot positions (clock positions, starting at 12 and going clockwise)
const DOTS = 12;
// Radius from circle centre to dot centre (matches Figma: ~119px)
const R = 119;

// Pre-compute dot positions relative to circle centre
const dotPositions = Array.from({ length: DOTS }, (_, i) => {
  const angle = (i / DOTS) * 2 * Math.PI - Math.PI / 2; // start at top
  return { x: R * Math.cos(angle), y: R * Math.sin(angle) };
});

interface PreloaderProps {
  onReady: () => void;
}

export default function Preloader({ onReady }: PreloaderProps) {
  const [loaded, setLoaded] = useState(0);
  const [exiting, setExiting] = useState(false);

  useEffect(() => {
    let count = 0;
    const done = () => {
      count++;
      setLoaded(count);
      if (count >= TOTAL) {
        setTimeout(() => setExiting(true), 500);
        setTimeout(() => onReady(), 1000);
      }
    };
    IMAGE_URLS.forEach((src) => {
      const img = new Image();
      img.onload = done;
      img.onerror = done;
      img.src = src;
    });
  }, [onReady]);

  const pct = Math.round((loaded / TOTAL) * 100);
  // How many dots should glow white (1–12 based on progress)
  const litDots = Math.max(1, Math.round((loaded / TOTAL) * DOTS));

  return (
    <div
      style={{
        position: "fixed",
        inset: 0,
        zIndex: 999,
        overflow: "hidden",
        opacity: exiting ? 0 : 1,
        transition: "opacity 0.5s ease",
        pointerEvents: exiting ? "none" : "auto",
      }}
    >
      {/* White base + paper texture on top */}
      <div style={{ position: "absolute", inset: 0, background: "white" }} />
      <div
        style={{
          position: "absolute",
          inset: 0,
          backgroundImage: `url("${imgBackgroundPaper}")`,
          backgroundSize: "1306.38px 870.375px",
          backgroundPosition: "top left",
        }}
      />

      {/* Centre group: dots + pod + label */}
      <div
        style={{
          position: "absolute",
          left: "50%",
          top: "50%",
          transform: "translate(-50%, -50%)",
          width: 0,
          height: 0,
        }}
      >
        {/* 12 dots */}
        {dotPositions.map(({ x, y }, i) => {
          const lit = i < litDots;
          return (
            <div
              key={i}
              style={{
                position: "absolute",
                left: x,
                top: y,
                transform: "translate(-50%, -50%)",
                width: 25,
                height: 25,
                borderRadius: "50%",
                background: lit ? "white" : "rgba(86,86,86,0.75)",
                transition: "background 0.3s ease",
                boxShadow: lit ? "0 0 8px 2px rgba(255,255,255,0.5)" : "none",
              }}
            />
          );
        })}

        {/* Cocoa pod — centred, rotated as per Figma (-133.75deg) */}
        <div
          style={{
            position: "absolute",
            left: 0.69,
            top: -16.9,
            transform: "translate(-50%, -50%)",
            width: 286.923,
            height: 290.193,
            display: "flex",
            alignItems: "center",
            justifyContent: "center",
          }}
        >
          <div
            style={{
              transform: "rotate(-133.75deg)",
              width: 257.074,
              height: 151.106,
              animation: "podFloat 3s ease-in-out infinite",
            }}
          >
            <img
              alt="cocoa pod"
              src={imgCocoaPod}
              style={{
                width: "100%",
                height: "100%",
                objectFit: "contain",
                pointerEvents: "none",
              }}
            />
          </div>
        </div>

        {/* "loading… X%" label — positioned below the circle */}
        <p
          style={{
            position: "absolute",
            left: "50%",
            top: R + 45,
            transform: "translateX(-50%)",
            margin: 0,
            fontFamily: "'Beiruti:Bold', 'Beiruti', sans-serif",
            fontWeight: 700,
            fontSize: 30,
            color: "#563703",
            whiteSpace: "nowrap",
            textAlign: "center",
          }}
        >
          loading... {pct}%
        </p>
      </div>

      <style>{`
        @keyframes podFloat {
          0%, 100% { transform: rotate(-133.75deg) translateY(0px); }
          50%       { transform: rotate(-133.75deg) translateY(-8px); }
        }
      `}</style>
    </div>
  );
}
