import Icon from "../Icon/Icon";
import SectionText from "../SectionText/SectionText";
import repositoryElementStyles from "./GitHubRepositoryElements.module.css";
import type React from "react";

type RepositoryCardProps = {
  repo: any;
  children: React.ReactNode;
};

export default function RepositoryCard({
  repo,
  children,
}: RepositoryCardProps) {
  const lastUpdate = repo.updated_at
    .replaceAll("T", " ")
    .replaceAll("Z", " ")
    .slice(0, 10);

  return (
    <SectionText
      title={repo.name.replaceAll("_", " ").replaceAll("-", " ").toUpperCase()}
      icon={
        <>
          <a target="_blank" href={repo.homepage} rel="noopener noreferrer">
            <Icon iconName="ri:RiGlobalLine" />
          </a>

          <a target="_blank" href={repo.html_url} rel="noopener noreferrer">
            <Icon iconName="fa:FaGithub" />
          </a>
        </>
      }
      mainText={
        <>
          <div className={repositoryElementStyles.repositoryDescription}>
            {repo.description}
          </div>

          {children}

          {repo.topics.map((topic: string) => (
            <div
              key={topic}
              className={repositoryElementStyles.repositoryTopics}
            >
              {topic}
            </div>
          ))}

          <div className={repositoryElementStyles.updated}>
            Last update <data>{lastUpdate}</data>
          </div>
        </>
      }
    />
  );
}
