import GitHubRepositoryServer, {
  GitHubRepositoryServerAll,
} from "./GitHubRepositoryServer";
import SectionText from "../SectionText/SectionText";
import sectionTextStyle from "../SectionText/SectionText.module.css";
import { useState } from "react";

export default function GitHubRepositoryClient() {
  const [showAllRepository, setShowAllRepository] = useState<boolean>(false);
  function TbSettingsQuestion() {
    setShowAllRepository(!showAllRepository);
  }

  return (
    <>
      {!showAllRepository && <GitHubRepositoryServer />}

      {showAllRepository && <GitHubRepositoryServerAll />}

      <SectionText    style={`${sectionTextStyle.sectionWrapperBackground}`}
        title={null}
        mainText={
          <div onClick={() => TbSettingsQuestion()}>
            {showAllRepository
              ? "Hide repositories"
              : "View Full Project Archive 🠚"}
          </div>
        }
      />
    </>
  );
}
