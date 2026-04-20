import gitHubRepository, { gitHubUserContent } from "./gitHubAPI";
import repositoryElementStyles from "./GitHubRepositoryElements.module.css";
import RepositoryCard from "./GitHubRepositoryElements";
import Media from "../Media/Media";

const data = await gitHubRepository(
  "https://api.github.com/users/kamildziuk/repos",
);
console.log(data)
export default function GitHubRepositoryServer() {
  const content = gitHubUserContent();

  const dataTable = [data[8], data[7], data[29], data[23], data[19], data[9], data[15]];

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

export function GitHubRepositoryServerAll() {
  return (
    <>
      {data.map((repo: any) => (
        <RepositoryCard key={repo.id} repo={repo}></RepositoryCard>
      ))}
    </>
  );
}
