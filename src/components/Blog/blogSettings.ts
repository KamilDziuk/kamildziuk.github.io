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

export const createPostPage = async (content: any, textPostsPage: any) => {
  const titleTextPosts = textPostsPage.name.replaceAll(".md", "");
  const mainTextPosts = await content;
  const htmlContent = marked.parse(mainTextPosts);
  const postPage = window.open("", "_blank", "");
  postPage!.document.title = `Kamil Dziuk – blog: ${titleTextPosts}`;

  postPage!.document.head.innerHTML = `
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Kamil Dziuk – blog - post - ${titleTextPosts}</title>
      <style>${blogPageElementStyles}</style>
    `;

  postPage!.document.body.innerHTML = `
      <div class="${blogElementStyles.postPageWrapper} ">
    <article >${htmlContent}</article>
      </div>
   
    `;
};