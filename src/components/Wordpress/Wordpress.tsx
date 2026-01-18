import repositoryElementStyles from "../GitHubRepository/GitHubRepositoryElements.module.css";
export default function Wordpress() {
  return (
    <a href="https://markolmchefkok.nl/">
      <img
        className={repositoryElementStyles.gitHubUserContent}
        src="../../../markolmchefkok.gif"
      />
    </a>
  );
}
