import gitHubRepository, { gitHubUserContent } from "./gitHubAPI";
import repositoryElementStyles from "./GitHubRepositoryElements.module.css";
import RepositoryCard from "./GitHubRepositoryElements";
import Media from "../Media/Media";

const data = await gitHubRepository(
  "https://api.github.com/users/kamildziuk/repos",
);

export default function GitHubRepositoryServer() {
  const content = gitHubUserContent();

  const dataTable = [
    data[29],
    data[24],
    data[7],
    data[6],
    data[27],
    data[21],
    data[17],
    data[8],
    data[14],
  ];

  return (
    <>
      {dataTable.map((repo: any, index: number) => (
        <RepositoryCard key={repo.id} repo={repo}>
          <Media
            mediaStyle={repositoryElementStyles.gitHubUserContent}
            media={content[index]}
            alt="portfolio images"
          />
        </RepositoryCard>
      ))}
    </>
  );
}
