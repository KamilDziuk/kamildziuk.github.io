import { useState, useEffect } from "react";
import gitHubReadme from "./readmeAPI";

export default function useClearTextAbout() {
  const [htmlContent, setHtmlContent] = useState<string>("");

  useEffect(() => {
    async function fetchReadme() {
      const readmeText = await gitHubReadme();
      setHtmlContent(readmeText);
    }
    fetchReadme();
  }, []);

  return htmlContent;
}
