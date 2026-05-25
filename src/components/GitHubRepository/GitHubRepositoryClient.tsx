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
          <span
            onClick={() => TbSettingsQuestion()}
            aria-label={
              showAllRepository ? "Hide repositories" : "Show all repositories"
            }
          >
            {showAllRepository ? "Hide repositories" : "Show all repositories"}
          </span>
        }
        icon={
          showAllRepository ? (
            <Icon ariaLabel="true" iconName="fa:FaLongArrowAltDown" />
          ) : (
            <Icon ariaLabel="true" iconName="fa:FaLongArrowAltUp" />
          )
        }
      />
    </>
  );
}
