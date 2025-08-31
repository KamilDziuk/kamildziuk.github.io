import headerStyles from "./Header.module.css";
import Hyperlinks from "../Hyperlinks/Hyperlinks";
import linksStyle from "../Hyperlinks/Hyperlinks.module.css";
import hyperlinksValues from "../Hyperlinks/hyperlinksValues";
import iconStyle from "../Icon/Icon.module.css";
import IconGroup from "../Icon/IconGroup";
import Icon from "../Icon/Icon";
const [navLinks] = hyperlinksValues() as [{ label: string; href: string }[]];
export default function Header() {
  return (
    <>
      <header className={headerStyles.header}>
        <div className={headerStyles.firstHeaderText}>Kamil Dziuk</div>
        <div className={headerStyles.secondHeaderText}>
          Websites & Web Applications
        </div>
        <p className={headerStyles.shortText}>
          I create modern web interfaces. I focus on readable code and solid
          architecture.
        </p>
        <Hyperlinks
          styleHyperLinks={linksStyle.styleNav}
          wrapper="nav"
          items={navLinks.map((link) => link.label)}
          hrefs={navLinks.map((link) => link.href)}
        />
        <IconGroup
          iconContent={
            <Hyperlinks
              styleHyperLinks={iconStyle.iconGroupWrapper}
              items={[
                <Icon iconName="md:MdOutlineEmail" />,
                <Icon iconName="fa:FaLinkedin" />,
                <Icon iconName="fa:FaGithub" />,
              ]}
              hrefs={[
                "mailto:kamildziukwebdeveloper@gmail.com",
                "https://www.linkedin.com/in/kamil-dziuk-1b02201b3/",
                "https://github.com/KamilDziuk",
              ]}
            />
          }
        />
      </header>
    </>
  );
}
