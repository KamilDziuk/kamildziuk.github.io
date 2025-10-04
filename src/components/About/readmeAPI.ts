import gitHubRepository, {
  type GitHubRepository,
} from "../GitHubRepository/gitHubAPI";

export default async function gitHubReadme() {
  const response = (await gitHubRepository(
    "https://api.github.com/repos/KamilDziuk/KamilDziuk/readme"
  )) as unknown as GitHubRepository;

  const decoded = atob(response.content);

  return decoded;
}
