import useClearTextAbout from "./useClearTextAbout";
import aboutStyle from "./About.module.css";
import ReactMarkdown from "react-markdown";
import rehypeRaw from "rehype-raw";
export default function AboutMe() {
  const htmlContent = useClearTextAbout();
  return (
  <div className={aboutStyle.about}>
  <ReactMarkdown rehypePlugins={[rehypeRaw]}>{htmlContent}</ReactMarkdown>
    </div>
  );
}
