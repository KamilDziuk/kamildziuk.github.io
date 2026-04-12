import sectionStyle from "./Section.module.css";
import { motion as Motion } from "framer-motion";

type SectionTextProps = {
  title?: React.ReactNode;
  idSection?: string;
  icon?:any;
  mainText?: React.ReactNode;
  style?: string;
};
const iconVariants = {
  hover: { y: -10, scale: 1.1, transition: { duration: 0.3 } },
  initial: { y: 0 },
};

const allElementVariants = {
  initial: { opacity: 0 },
};

export default function Section({
  title,
  idSection,
  mainText,
  icon,
  style,
}: SectionTextProps) {
  return (
    <Motion.section
      variants={allElementVariants}
      whileInView={{ opacity: 1 }}
      transition={{ duration: 1, ease: "easeInOut" }}
      viewport={{ once: true }}
      id={idSection}
      initial="initial"
      whileHover="hover"
      className={`${sectionStyle.sectionWrapper} ${style} `}
    >
      <div className={sectionStyle.sectionTitleText}>
        {title}
        <Motion.span
          variants={iconVariants}
          initial={{ x: 50, opacity: 0 }}
          whileInView={{ x: 0, opacity: 1 }}
          transition={{ duration: 0.3, delay: 0.2 }}
          viewport={{ once: true }}
          className={sectionStyle.iconWrapper}
        >
          {icon}
        </Motion.span>
      </div>
      <div className={sectionStyle.sectionMainText}>{mainText}</div>
    </Motion.section>
  );
}
