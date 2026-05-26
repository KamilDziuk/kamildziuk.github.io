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
  url: string,
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
    // "https://raw.githubusercontent.com/KamilDziuk/ElCoffeino/main/public/gif/presentation.gif",
    "../../../{71D0385E-84D7-4EB0-897F-C5F51A7C2D45}.png",
    // "https://raw.githubusercontent.com/KamilDziuk/djMatthew/main/presentation.gif",
    "../../../{8FB8B608-3A8D-468C-B26C-6334B0958D89}.png",
    // "https://raw.githubusercontent.com/KamilDziuk/yourAssistantAI/main/client/src/assets/video/presentation.gif",
    "../../../{77974613-061C-4646-B78F-DB2E315C06D2}.png",
    // "https://raw.githubusercontent.com/KamilDziuk/parkpaderewskiego/main/src/public/assets/video/presentation.gif",
    "../../../{CBFC61E6-D468-4C82-86B0-F3115DA37A4E}.png",
    // "https://raw.githubusercontent.com/KamilDziuk/live-chat/main/presentation.gif",
    "../../../{B20CB587-362E-453A-B085-D03AB420E909}.png",
    // "https://raw.githubusercontent.com/KamilDziuk/emplaza/main/image/presentation.gif",
    "../../../{7F1D4816-35A1-4A08-A908-B1DEF8102160}.png",
    //"https://raw.githubusercontent.com/KamilDziuk/jumpingObject/main/assets/images/presentation.gif",
    "../../../{9A0FFA4B-87DC-4655-B197-18693A6D14DF}.png",
  ];

  return content;
}
