import Icon from "../Icon/Icon";
import assistantAIStyle from "./AssistantAI.module.css";
import useAssistantAI from "./useAssistantAI";
export default function AssistantAI() {
  const [closeWindowPopup, clickBehavior] = useAssistantAI();

  return (
    <>
      <button
        onClick={() => clickBehavior()}
        className={assistantAIStyle.assistantButton}
      >
        <Icon iconName="io5:IoChatbubbles" />
      </button>
      {!closeWindowPopup && (
        <embed
          className={assistantAIStyle.assistantWindow}
          src="https://your-assistant-ai.onrender.com/"
        />
      )}
      {!closeWindowPopup && (
        <button
          onClick={() => clickBehavior()}
          className={assistantAIStyle.closeWindowPopup}
        >
          X
        </button>
      )}
    </>
  );
}
