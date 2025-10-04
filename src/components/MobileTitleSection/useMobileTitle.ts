import { useState, useEffect } from "react";
export default function useMobileTitle(titleText: string) {
  const [showTitleText, setShowTitleText] = useState<string>("");
  useEffect(() => {
    setInterval(() => {
      if (window.innerWidth < 1150) {
        setShowTitleText(titleText);
      } else if (window.innerWidth > 1150) {
        setShowTitleText("");
      }
    }, 100);
  }, []);

  return showTitleText;
}
