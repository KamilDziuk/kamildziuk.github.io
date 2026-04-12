import React, { Suspense } from "react";
import Media from "../Media/Media.tsx";
import repositoryElementStyles from "../GitHubRepository/GitHubRepositoryElements.module.css";
import Icon from "../Icon/Icon.tsx";
import sectionStyle from "../Section/Section.module.css";

const About = React.lazy(() => import("../About/About.tsx"));
const Cooperation = React.lazy(() => import("../Cooperation/Cooperation.tsx"));
const GitHubRepositoryClient = React.lazy(
  () => import("../GitHubRepository/GitHubRepositoryClient.tsx"),
);

export default function SectionContentList() {
  const sections = [
    {
      style: `${sectionStyle.sectionWrapperBackground}`,
      idSection: "aboutMePosition",
      mainText: (
        <Suspense fallback={null}>
          <About />
        </Suspense>
      ),
    },

    {
      title: "CODE PROJECT",
      idSection: "portfolioPosition",
      icon: <Icon iconName="fa:FaCode" />,
      style: `${sectionStyle.sectionWrapperBackground}`,
    },
    {
      mainText: (
        <Suspense fallback={null}>
          <GitHubRepositoryClient />
        </Suspense>
      ),
      style: `${sectionStyle.sectionWrapperRepo}`,
    },

    {
      title: "WORDPRESS PROJECT",
      idSection: "portfolioWordpressPosition",
      icon: <Icon iconName="fa:FaWordpressSimple" />,
      style: `${sectionStyle.sectionWrapperBackground}`,
    },
    {
      title: "Markolm Chefkok",
      icon: (
        <>
          <a
            target="_blank"
            href={"https://markolmchefkok.nl/"}
            rel="noopener noreferrer"
          >
            <Icon iconName="ri:RiGlobalLine" />
          </a>
        </>
      ),

      mainText: (
        <>
          <div>
            The markolmchefkok.nl website was built using WordPress, which
            manages the content and structure of the site. Additionally, an AI
            agent written in React was implemented, integrated with WordPress
            via an API, providing support.
          </div>
          <Media
            mediaStyle={repositoryElementStyles.gitHubUserContent}
            media="../../../markolmchefkok.gif"
            alt=""
          />
        </>
      ),
    },
    {
      title: "United Sellers",
      icon: (
        <>
          <a
            target="_blank"
            href={"https://unitedsellers.eu/"}
            rel="noopener noreferrer"
          >
            <Icon iconName="ri:RiGlobalLine" />
          </a>
        </>
      ),

      mainText: (
        <>
          <div>
            The website United Sellers was built using WordPress with the
            Elementor page builder. The layout is based on a responsive section
            and container system, allowing dynamic content management without
            direct code modifications. The structure is optimized for UX/UI and
            basic SEO, with a focus on usability, performance, and mobile
            compatibility.
          </div>
          <Media
            mediaStyle={repositoryElementStyles.gitHubUserContent}
            media="../../../sunitedsellers.gif"
            alt=""
          />
        </>
      ),
    },
    {
      title: "WWW PAGES",
      idSection: "offerPosition",
      icon: <Icon iconName="ri:RiPagesLine" />,
      mainText:
        "I design each website in such a way as to maintain harmony between aesthetics and simplicity. It strives to create websites that are not only eye-catching, but also easy to use for users. I emphasize minimalist design, eliminating unnecessary elements and focusing on key aspects, which makes the pages clear and intuitive. Mainly using JavaScript and PHP programming languages",
    },

    {
      title: "WEB APP",
      icon: <Icon iconName="ri:RiFunctionAddLine" />,
      mainText:
        "Do you need tailored functionality for your website? I will design an application or functionality for you that meets the individual needs of your business. Discover the potential of non-standard solutions and stand out from the competition!",
    },

    {
      title: "TECHNICAL SUPPORT",
      icon: <Icon iconName="fa:FaTools" />,
      mainText:
        "If you want to maintain full control over the health of your website and application, I will be happy to cooperate with you in the field of cybersecurity and technical support.",
    },

    {
      title: "WHAT DOES COOPERATION LOOK LIKE?",
      idSection: "cooperationPosition",
      icon: <Icon iconName="fa:FaRegHandshake" />,
      style: `${sectionStyle.sectionWrapperBackground}`,
    },
    {
      mainText: (
        <Suspense fallback={null}>
          <Cooperation />
        </Suspense>
      ),
    },
  ];

  return sections;
}
