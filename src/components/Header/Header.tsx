import { useShowContact } from "../Hyperlinks/useNavigationIndicator";
import headerStyles from "./Header.module.css";
import Hyperlinks from "../Hyperlinks/Hyperlinks";
import HyperlinksIcon from "../Hyperlinks/HyperlinksIcons";
import linksStyle from "../Hyperlinks/Hyperlinks.module.css";
import blogElementStyles from "../Blog/Blog.module.css";
import hyperlinksValues from "../Hyperlinks/hyperlinksValues";
import iconStyle from "../Icon/Icon.module.css";
import IconGroup from "../Icon/IconGroup";
import Icon from "../Icon/Icon";

const [navLinks] = hyperlinksValues() as [{ label: string; href: string }[]];
export default function Header() {
  const [navigationContact, showContact] = useShowContact();
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
        <a href="#/blog" className={blogElementStyles.styleNavBlog}>
          Blog
        </a>
        <div
          className={linksStyle.styleNavContact}
          onClick={() => showContact()}
        >
          Contact
        </div>

        {!navigationContact && (
          <IconGroup
            iconContent={
              <Hyperlinks
                styleHyperLinks={headerStyles.contactElement}
                items={[
                  <Icon iconName="fa:FaPhoneAlt" />,
                  "+ 48 668 573 034",
                  <Icon iconName="md:MdOutlineEmail" />,
                  "kamildziukwebdeveloper@gmail.com",
                  <Icon iconName="fa:FaLocationArrow" />,
                  " Poland, Katowice ",
                ]}
                hrefs={[
                  "",
                  "tel:+ 48 668 573 034",
                  "",
                  "mailto:kamildziukwebdeveloper@gmail.com",
                  "",
                  "https://www.google.com/maps/place/Katowice/@50.2138488,18.925582,12z/data=!3m1!4b1!4m6!3m5!1s0x4716ce2336a1ccd1:0xb9af2a350559fabb!8m2!3d50.2648919!4d19.0237815!16zL20vMGJsZDg?entry=ttu&g_ep=EgoyMDI1MDgyNS4wIKXMDSoASAFQAw%3D%3D",
                ]}
              />
            }
          />
        )}
        <IconGroup
          iconContent={
            <HyperlinksIcon
              styleHyperLinks={iconStyle.iconGroupWrapper}
              items={[
                <Icon iconName="md:MdOutlineEmail" />,
                <Icon iconName="fa:FaInstagram" />,
                <Icon iconName="fa:FaLinkedin" />,
                <Icon iconName="fa:FaGithub" />,
              ]}
              hrefs={[
                "mailto:kamildziukwebdeveloper@gmail.com",
                "https://www.instagram.com/kamildziukwebdeveloper/",
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
