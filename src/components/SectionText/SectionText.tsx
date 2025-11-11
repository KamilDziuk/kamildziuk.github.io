import sectionTextStyle from "./SectionText.module.css";
import { motion as Motion } from "framer-motion";

type SectionTextProps = {
  title?: string | null | any;
  icon?: any;
  mainText: React.ReactNode;
  style?: any;
};
const iconVariants = {
  hover: { y: -10, scale: 1.1, transition: { duration: 0.3 } },
  initial: { y: 0 },
};

const allElementVariants = {
  initial: { opacity: 0 },
};

export default function SectionText({
  title,
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
      initial="initial"
      whileHover="hover"
      className={`${sectionTextStyle.sectionWrapper} ${style} `}
    >
      <div className={sectionTextStyle.sectionTitleText}>
        {title}
        <Motion.span
          variants={iconVariants}
          initial={{ x: 50, opacity: 0 }}
          whileInView={{ x: 0, opacity: 1 }}
          transition={{ duration: 0.3, delay: 0.2 }}
          viewport={{ once: true }}
          className={sectionTextStyle.iconWrapper}
        >
          {icon}
        </Motion.span>
      </div>
      <div className={sectionTextStyle.sectionMainText}>{mainText}</div>
    </Motion.section>
  );
}
