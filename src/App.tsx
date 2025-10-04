import React, { Suspense } from "react";

const Loading = React.lazy(() => import("./components/Loading/Loading"));
import LightReflections from "./components/LightReflections/LightReflections.tsx";
import Header from "./components/Header/Header.tsx";
const About = React.lazy(() => import("./components/About/About.tsx"));
import Logo from "./components/Logo/Logo.tsx";
import Icon from "./components/Icon/Icon";
import Cooperation from "./components/Cooperation/Cooperation.tsx";
import MobileTitleSection from "./components/MobileTitleSection/MobileTitleSection";
import SectionText from "./components/SectionText/SectionText";
import AssistantAI from "./components/AssistantAI/AssistantAI.tsx";
import sectionTextStyle from "./components/SectionText/SectionText.module.css";
const GitHubRepositoryClient = React.lazy(
  () => import("./components/GitHubRepository/GitHubRepositoryClient.tsx")
);
import "./App.css";

function App() {
  return (
    <>
      <LightReflections />

      <Suspense
        fallback={
        null
        }
      >
        <Loading />
      </Suspense>
      <Logo />
      <Header />

      <MobileTitleSection
        idSection={"aboutMePosition"}
        titleSection={"About"}
      />
      <SectionText
        style={`${sectionTextStyle.sectionWrapperBackground}`}
        title={null}
        mainText={
          <Suspense fallback={null}>
            <About />
          </Suspense>
        }
      />
      <MobileTitleSection
        idSection={"portfolioPosition"}
        titleSection={"Projects"}
      />
      <Suspense fallback={null}>
        <GitHubRepositoryClient />
      </Suspense>
      <MobileTitleSection idSection={"offerPosition"} titleSection={"Offer"} />
      <SectionText
        title={"WWW PAGES"}
        icon={<Icon iconName="ri:RiPagesLine" />}
        mainText={
          "I design each website in such a way as to maintain harmony between aesthetics and simplicity. It strives to create websites that are not only eye-catching, but also easy to use for users. I emphasize minimalist design, eliminating unnecessary elements and focusing on key aspects, which makes the pages clear and intuitive. Mainly using JavaScript and PHP programming languages"
        }
      />
      <SectionText
        title={"WEB APP"}
        icon={<Icon iconName="ri:RiFunctionAddLine" />}
        mainText={
          "Do you need tailored functionality for your website? I will design an application or functionality for you that meets the individual needs of your business. Discover the potential of non-standard solutions and stand out from the competition!"
        }
      />
      <SectionText
        title={"TECHNICAL SUPPORT"}
        icon={<Icon iconName="fa:FaTools" />}
        mainText={
          "If you want to maintain full control over the health of your website and application, I will be happy to cooperate with you in the field of cybersecurity and technical support."
        }
      />

      <MobileTitleSection
        idSection={"cooperationPosition"}
        titleSection={"Cooperation"}
      />
      <SectionText
        style={`${sectionTextStyle.sectionWrapperBackground}`}
        title={"WHAT DOES COOPERATION LOOK LIKE?"}
        mainText={<Cooperation />}
      />
      <AssistantAI />
    </>
  );
}

export default App;
