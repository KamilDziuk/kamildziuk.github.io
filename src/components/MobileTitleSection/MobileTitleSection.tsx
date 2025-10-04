import useMobileTitle from "./useMobileTitle";
import mobileTitleSectionStyle from "./MobileTitleSection.module.css";
export default function MobileTitleSection({
  titleSection,
  idSection,
}: {
  titleSection: string;
  idSection: string;
}) {
  return (
    <h3 id={idSection} className={mobileTitleSectionStyle.mobileTitleSection}>
      {useMobileTitle(titleSection.toLocaleUpperCase())}
    </h3>
  );
}
