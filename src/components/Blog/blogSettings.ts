
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





