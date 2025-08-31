import axios from "axios";

interface GitHubReadme {
  content: string;
  encoding: string;
}

export default async function gitHubReadme() {
  const response = await axios.get<GitHubReadme>(
    "https://api.github.com/repos/KamilDziuk/KamilDziuk/readme",
    { headers: { Accept: "application/vnd.github+json" } }
  );

  const decoded = atob(response.data.content);
  const cleanText = decoded.replaceAll("#", "");
  return cleanText.substring(33, 350);
}
