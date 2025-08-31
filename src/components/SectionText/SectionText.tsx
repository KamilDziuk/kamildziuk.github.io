import sectionTextStyle from "./SectionText.module.css";

type SectionTextProps = {
  title?: string | null;
  icon?: any;
  mainText: React.ReactNode;
  style?: any;
};

export default function SectionText({
  title,
  mainText,
  icon,
  style,
}: SectionTextProps) {
  return (
    <section className={`${sectionTextStyle.sectionWrapper} ${style} `}>
      <h3 className={sectionTextStyle.sectionTitleText}>
        {title}
        {icon}
      </h3>
      <div className={sectionTextStyle.sectionMainText}>{mainText}</div>
    </section>
  );
}
