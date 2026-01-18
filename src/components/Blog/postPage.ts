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

    <style>${blogPageElementStyles}</style>
  </head>
  <body>
    <a href="https://kamildziuk.github.io/#/blog" class="${blogElementStyles.logo}"> &larr; Back</a>
      <div class="lightReflectionsContainer">
      <div class="lightReflections"></div>
    </div>
<div  class="gtranslate_wrapper"></div>
<script>
window.gtranslateSettings = {"default_language":"en","native_language_names":true,"languages":["en","pl"],"wrapper_selector":".gtranslate_wrapper","flag_size":24,"horizontal_position":"right","vertical_position":"top"}
</script>
<script src="https://cdn.gtranslate.net/widgets/latest/flags.js" defer></script>

    <div class="${blogElementStyles.postPageWrapper}">

             <img
             loading="lazy"
            alt="post image named ${titleTextPosts}"
            class="${blogElementStyles.singlePostImages}"
            src="${postImage}"
          />
      <article>${htmlContent}</article>
    </div>
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
}
a.glink img {
  margin-right: 7px !important;
}  
.gt_switcher_wrapper

{
right: 45px !important;
      filter: grayscale(100%);
  transition: filter 0.3s ease;
}

.lightReflections {
  --delay: 0s;
  --size: 0.4;
  --speed: 10s;

  aspect-ratio: 1;
  width: calc(150% * var(--size));
z-index:1 ;
  background: linear-gradient(
    259.53deg,
    #4229ff 20%,
    #000000 60%,
    #ffffff 10%,
    #0a12ff 10%
    
  );
  filter: blur(10vw);

  border-radius: 50%;

  position: absolute;
  top: 0;
  left: 0;

  animation: loop var(--speed) infinite linear;
  animation-delay: var(--delay);
  transform-origin: 50% 50%;

  opacity: 0.6;
z-index:1 ;
  margin: 0;
  padding: 0;
}

@keyframes loop {
  0% {
    transform: translate3D(0%, 51%, 0) rotate(0deg);
  }
  5% {
    transform: translate3D(8%, 31%, 0) rotate(18deg);
  }
  10% {
    transform: translate3D(22%, 13%, 0) rotate(36deg);
  }
  15% {
    transform: translate3D(40%, 2%, 0) rotate(54deg);
  }
  20% {
    transform: translate3D(46%, 21%, 0) rotate(72deg);
  }
  25% {
    transform: translate3D(50%, 47%, 0) rotate(90deg);
  }
  30% {
    transform: translate3D(53%, 80%, 0) rotate(108deg);
  }
  35% {
    transform: translate3D(59%, 98%, 0) rotate(125deg);
  }
  40% {
    transform: translate3D(84%, 89%, 0) rotate(144deg);
  }
  45% {
    transform: translate3D(92%, 68%, 0) rotate(162deg);
  }
  50% {
    transform: translate3D(99%, 47%, 0) rotate(180deg);
  }
  55% {
    transform: translate3D(97%, 21%, 0) rotate(198deg);
  }
  60% {
    transform: translate3D(80%, 7%, 0) rotate(216deg);
  }
  65% {
    transform: translate3D(68%, 25%, 0) rotate(234deg);
  }
  70% {
    transform: translate3D(59%, 41%, 0) rotate(251deg);
  }
  75% {
    transform: translate3D(50%, 63%, 0) rotate(270deg);
  }
  80% {
    transform: translate3D(38%, 78%, 0) rotate(288deg);
  }
  85% {
    transform: translate3D(21%, 92%, 0) rotate(306deg);
  }
  90% {
    transform: translate3D(3%, 79%, 0) rotate(324deg);
  }
  100% {
    transform: translate3D(0%, 51%, 0) rotate(360deg);
  }
}

.lightReflectionsContainer {
  all: unset;

  position: fixed;
  inset: 0;
  width: 100vw;
  height: 100vh;
z-index:1 ;
  overflow: hidden;

  margin: 0;
  padding: 0;
}


@media screen and (max-width: 400px) {
.gt_switcher_wrapper

{
right: 5px !important;

}
}

</style>
</body>
</html>
`;
  const postHTMLBlob = new Blob([postHTML], { type: "text/html" });
  const postHTMLUrl = URL.createObjectURL(postHTMLBlob);
  window.open(postHTMLUrl, "_blank");
};
