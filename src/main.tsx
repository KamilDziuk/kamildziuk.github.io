import { Suspense, StrictMode, lazy } from "react";
import Loader from "./components/Loader/Loader.tsx";
import { createRoot } from "react-dom/client";
import { HelmetProvider } from "react-helmet-async";

const App = lazy(() => import("./App.tsx"));

createRoot(document.getElementById("root")!).render(
  <StrictMode>
    <HelmetProvider>
      <Suspense fallback={<Loader />}>
        <App />
      </Suspense>
    </HelmetProvider>
  </StrictMode>,
);
