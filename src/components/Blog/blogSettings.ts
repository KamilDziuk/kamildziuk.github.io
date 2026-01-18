import gitHubRepository from "../GitHubRepository/gitHubAPI";

export const postsBlog = await gitHubRepository(
  "https://api.github.com/repos/KamilDziuk/blog/contents/posts"
);

export const contentPosts = async (mainTextPosts: string) => {
  const data = await gitHubRepository(mainTextPosts);
  const dataString = String(data);
  return dataString;
};

export const postImages = async (imageID: any) => {
  const images = await gitHubRepository(
    "https://api.github.com/repos/KamilDziuk/blog/contents/postImages"
  );
  const dataImages = images[imageID].download_url;
  return dataImages;
};

export async function repoBlogDateStatus() {

  
  const repoBlogApi = await fetch(
    "https://api.github.com/repos/KamilDziuk/blog"
  );

  const blogDateStatus = await repoBlogApi.json();

  return [
    blogDateStatus.updated_at
      .replaceAll("T", " ")
      .replaceAll("Z", " ")
      .slice(0, 10),
    blogDateStatus.created_at
      .replaceAll("T", " ")
      .replaceAll("Z", " ")
      .slice(0, 10),
  ];
}
