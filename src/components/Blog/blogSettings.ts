import blogPageElementStyles from "../Blog/Blog.module.css?inline";
import gitHubRepository from "../GitHubRepository/gitHubAPI";
import blogElementStyles from "../Blog/Blog.module.css";

import { marked } from "marked";
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

export const createPostPage = async (
  content: any,
  textPostsPage: any,
  index: any
) => {
  const titleTextPosts = textPostsPage.name.replaceAll(".md", "");
  const mainTextPosts = await content;
  const htmlContent = marked.parse(mainTextPosts);

  const postHTML = `
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kamil Dziuk – blog - post - ${titleTextPosts}</title>
    <style>${blogPageElementStyles}</style>
  </head>
  <body>
    <div class="${blogElementStyles.postPageWrapper}">
             <img
            class="${blogElementStyles.pagePostImages}"
            src="${await postImages(index)}"
          />
      <article>${htmlContent}</article>
    </div>

  </body>
</html>
`;

  const postPage = window.open("", "_blank");
  postPage!.document.body.innerHTML = postHTML;
};
