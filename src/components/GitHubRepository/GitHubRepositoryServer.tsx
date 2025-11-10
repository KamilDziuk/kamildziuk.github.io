import gitHubRepository, { gitHubUserContent } from "./gitHubAPI";
import repositoryElementStyles from "./GitHubRepositoryElements.module.css";
import RepositoryCard from "./GitHubRepositoryElements";
const data = await gitHubRepository(
  "https://api.github.com/users/kamildziuk/repos"
);

export default function GitHubRepositoryServer() {
  const content = gitHubUserContent();
  console.log(data)
  const dataTable = [data[7], data[29], data[23], data[8], data[15]];

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
