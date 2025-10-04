import { useState } from "react";
export default function useAssistantAI(): [boolean, () => void] {
  const [closeWindowPopup, setCloseWindowPopup] = useState(true);
  const clickBehavior = () => {
    setCloseWindowPopup(!closeWindowPopup);
  };

  return [closeWindowPopup, clickBehavior];
}
