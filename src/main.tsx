import { Suspense, StrictMode, lazy } from "react";
// import { registerSW } from "virtual:pwa-register";
import Loader from "./components/Loader/Loader.tsx";
import { createRoot } from "react-dom/client";
const App = lazy(() => import("./App.tsx"));

// const updateSW = registerSW({
//   onNeedRefresh() {
//     if (confirm("A new version of the page is available. Refresh now?")) {
//       updateSW(true);
//     }
//   },
//   onOfflineReady() {
//     console.log("✅ The application is ready to work offline.");
//   },
// });

createRoot(document.getElementById("root")!).render(
  <StrictMode>
    <Suspense fallback={<Loader />}>
      <App />
    </Suspense>
  </StrictMode>
);
