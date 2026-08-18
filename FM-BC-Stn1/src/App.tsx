import { useState, useCallback } from "react";
import Preloader from "./Preloader";
import StoryViewer from "./StoryViewer";

export default function App() {
  const [ready, setReady] = useState(false);
  const handleReady = useCallback(() => setReady(true), []);

  return (
    <>
      {!ready && <Preloader onReady={handleReady} />}
      {/* Mount StoryViewer early so assets begin decoding while preloader shows */}
      <div style={{ visibility: ready ? "visible" : "hidden", width: "100%", height: "100%" }}>
        <StoryViewer />
      </div>
    </>
  );
}
