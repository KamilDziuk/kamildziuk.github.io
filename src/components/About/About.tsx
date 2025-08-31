import useClearTextAbout from "./useClearTextAbout";
export default function AboutMe() {
  const htmlContent = useClearTextAbout();
  return <div dangerouslySetInnerHTML={{ __html: htmlContent }}></div>;
}
