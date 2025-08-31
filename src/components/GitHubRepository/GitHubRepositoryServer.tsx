import gitHubRepository, { gitHubUserContent } from "./gitHubAPI";
import repositoryElementStyles from "./GitHubRepositoryElements.module.css";
import RepositoryCard from "./GitHubRepositoryElements";
const data = await gitHubRepository(
  "https://api.github.com/users/kamildziuk/repos"
);
export default function GitHubRepositoryServer() {
  const content = gitHubUserContent();
  const dataTable = [data[6], data[28], data[21], data[7], data[14]];

  return (
    <>
      {dataTable.map((repo: any, index: number) => (
        <RepositoryCard key={repo.id} repo={repo}>
          <img
            loading="lazy"
            className={repositoryElementStyles.gitHubUserContent}
            src={content[index]}
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
        <RepositoryCard key={repo.id} repo={repo}>
          {null}
        </RepositoryCard>
      ))}
    </>
  );
}
