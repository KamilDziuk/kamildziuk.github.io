import blogPageElementStyles from "../Blog/Blog.module.css?inline";
import blogElementStyles from "../Blog/Blog.module.css";
import { postImages } from "./blogSettings";
import { marked } from "marked";

export const createPostPage = async (
  content: any,
  textPostsPage: any,
  index: any
) => {
  const titleTextPosts = textPostsPage.name.replaceAll(".md", "");
  const mainTextPosts = await content;
  const htmlContent = marked.parse(mainTextPosts);
  const postImage = await postImages(index);
  const postHTML = `
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kamil Dziuk – blog - post - ${titleTextPosts}</title>
       <style>
       * {
  box-sizing: border-box;
}

:root {
  font-synthesis: none;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  overflow-wrap: anywhere;
  color: #ffffff93;
  background-color: rgb(5, 5, 55);
  font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
    "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
  overflow-x: hidden;
  font-weight: 300;
  scroll-behavior: smooth;
  line-height: 1.4;
}

strong,
code {
  color: rgb(224, 224, 224);
  font-size: 14px;
  font-weight: 900;
}
  pre {
  background: rgba(0, 0, 0, 0.574);
  color: #ffffff;
  padding: 1%;
  overflow: hidden;
}
h1 {
  font-size: 25px;
  font-weight: 600;
  padding-top: 3%;
  padding-bottom: 1%;
  text-align: center;
}
h3 {
  font-weight: 600;
  display: flex;
  font-size: 17px;
  padding: 0% 0% 1.5% 0%;
  margin: 0% 0% 0% 0%;
  z-index: 994;
}
ol {
  padding: 0% 0% 0% 4.5%;
  margin: 0% 0% 0% 0%;
}
a {
  color: #ffffff;
  text-decoration: none;
}

i {
  margin-top: 200px;
  font-size: 35px;
  padding: 1.5% 0% 1.5% 0%;
}

i:hover {
  text-shadow: 0 0 0.3em currentColor;
}

a:active {
  text-shadow: 0 0 1em currentColor;
}

a:hover {
  text-shadow: 0 0 0.3em currentColor;
}</style>
    <style>${blogPageElementStyles}</style>
  </head>
  <body>
      <a href="https://kamildziuk.github.io/#/blog" class="${blogElementStyles.logo}">Back</a>
    <div class="${blogElementStyles.postPageWrapper}">
             <img
             loading="lazy"
            alt="post image named ${titleTextPosts}"
            class="${blogElementStyles.pagePostImages}"
            src="${postImage}"
          />
      <article>${htmlContent}</article>
    </div>
</body>
</html>
`;

  const postHTMLBlob = new Blob([postHTML], { type: "text/html" });
  const postHTMLUrl = URL.createObjectURL(postHTMLBlob);
  window.open(postHTMLUrl, "_blank");
};
