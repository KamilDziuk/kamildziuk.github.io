import axios from "axios";

export interface GitHubRepository {
  [x: string]: any;
  id: number;
  content: string;
  encoding: string;
  name: string;
  html_url: string;
  homepage: string | null;
  description: string | null;
  topics: string[];
}

export default async function gitHubRepository(
  url: string
): Promise<GitHubRepository[]> {
  try {
    const response = await axios.get<GitHubRepository[]>(url, {
      headers: { Accept: "application/vnd.github+json" },
    });

    return response.data;
  } catch (error: any) {
    if (axios.isAxiosError(error)) {
      console.error("Error Axios:", error.message);
      console.error("Status:", error.response?.status);
    } else {
      console.error("Unknown error:", error);
    }
    return [];
  }
}

export function gitHubUserContent(): string[] {
  const content = [
    "https://raw.githubusercontent.com/KamilDziuk/djMatthew/main/presentation.gif",
    "https://raw.githubusercontent.com/KamilDziuk/yourAssistantAI/main/client/src/assets/video/presentation.gif",
    "https://raw.githubusercontent.com/KamilDziuk/parkpaderewskiego/main/src/public/assets/video/presentation.gif",
    "https://raw.githubusercontent.com/KamilDziuk/emplaza/main/image/presentation.gif",
    "https://raw.githubusercontent.com/KamilDziuk/jumpingObject/main/assets/images/presentation.gif",
  ];

  return content;
}
