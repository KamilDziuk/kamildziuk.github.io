import GitHubRepositoryServer, {
  GitHubRepositoryServerAll,
} from "./GitHubRepositoryServer";

import SectionText from "../SectionText/SectionText";
import sectionTextStyle from "../SectionText/SectionText.module.css";
import { useState } from "react";
import Icon from "../Icon/Icon";
export default function GitHubRepositoryClient() {
  const [showAllRepository, setShowAllRepository] = useState<boolean>(false);
  function TbSettingsQuestion() {
    setShowAllRepository(!showAllRepository);
  }

  return (
    <>
      {!showAllRepository && <GitHubRepositoryServer />}
      {showAllRepository && <GitHubRepositoryServerAll />}

      <SectionText
        style={`${sectionTextStyle.sectionWrapperBackground}`}
        title={
          <span  onClick={() => TbSettingsQuestion()}>
            {showAllRepository ? "Hide repositories" : "Show all repositories"}
          </span>
        }
        mainText={null}
        icon={
          showAllRepository ? (
            <Icon iconName="fa:FaLongArrowAltDown" />
          ) : (
            <Icon iconName="fa:FaLongArrowAltUp" />
          )
        }
      />
    </>
  );
}
