import Loading from "./components/Loading/Loading";
import LightReflections from "./components/LightReflections/LightReflections.tsx";
import Header from "./components/Header/Header.tsx";
import About from "./components/About/About.tsx";
import Logo from "./components/Logo/Logo.tsx";
import Icon from "./components/Icon/Icon";
import Cooperation from "./components/Cooperation/Cooperation.tsx";
import Hyperlinks from "./components/Hyperlinks/Hyperlinks";
import iconStyle from "./components/Icon/Icon.module.css";
import GitHubRepositoryClient from "./components/GitHubRepository/GitHubRepositoryClient.tsx";
import MobileTitleSection from "./components/MobileTitleSection/MobileTitleSection";
import SectionText from "./components/SectionText/SectionText";
import AssistantAI from "./components/AssistantAI/AssistantAI.tsx";
import sectionTextStyle from "./components/SectionText/SectionText.module.css";
import "./App.css";

function App() {
  return (
    <>
      <LightReflections />
      <Loading />
      <Logo />
      <Header />

      <MobileTitleSection
        idSection={"aboutMePosition"}
        titleSection={"About"}
      />
      <SectionText
        style={`${sectionTextStyle.sectionWrapperBackground}`}
        title={"Hi there, my name is Kamil Dziuk"}
        mainText={<About />}
      />
      <SectionText
        style={`${sectionTextStyle.sectionWrapperBackground}`}
        title={"Tools"}
        icon={
          <Hyperlinks
            styleHyperLinks={`${iconStyle.iconGroupWrapper} ${iconStyle.tools}`}
            items={[
              <Icon iconName="ri:RiHtml5Fill" />,
              <Icon iconName="ri:RiCss3Line" />,
              <Icon iconName="bi:BiLogoTypescript" />,
              <Icon iconName="ri:RiReactjsFill" />,
              <Icon iconName="ri:RiNodejsFill" />,
              <Icon iconName="si:SiMongodb" />,
              <Icon iconName="si:SiFigma" />,
              <Icon iconName="io5:IoLogoWordpress" />,
              <Icon iconName="si:SiGoogleanalytics" />,
            ]}
            hrefs={[]}
          />
        }
        mainText={null}
      />
      <MobileTitleSection
        idSection={"portfolioPosition"}
        titleSection={"Projects"}
      />
      <GitHubRepositoryClient />
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
