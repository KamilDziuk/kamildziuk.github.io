import GitHubRepositoryServer, {
  GitHubRepositoryServerAll,
} from "./GitHubRepositoryServer";

import SectionGitHubRepository from "../Section/Section";
import sectionGitHubRepositoryStyle from "../Section/Section.module.css";
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

      <SectionGitHubRepository
        style={`${sectionGitHubRepositoryStyle.sectionWrapperBackground}`}
        title={
          <span onClick={() => TbSettingsQuestion()}>
            {showAllRepository ? "Hide repositories" : "Show all repositories"}
          </span>
        }
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
