import LightReflections from "../LightReflections/LightReflections.tsx";
import Icon from "../Icon/Icon";
import { Suspense } from "react";
import sectionTextStyle from "../SectionText/SectionText.module.css";
import SectionText from "../SectionText/SectionText";
// const Post = React.lazy(() => import("../Blog/Post.tsx"));
import Logo from "../Logo/Logo.tsx";

import {
  postsBlog,
  contentPosts,
  createPostPage,
  postImages,
} from "../Blog/blogSettings.ts";
import ReactMarkdown from "react-markdown";
import blogElementStyles from "../Blog/Blog.module.css";

const post = postsBlog.map(async (textPosts: any, index: any) => {
  const content = contentPosts(`${textPosts.download_url}`);

  return (
    <article key={textPosts.sha || index}>
      <div className={blogElementStyles.postElements}>
        <div className={blogElementStyles.mainPost}>
          <img
            className={blogElementStyles.postImages}
            src={await postImages(index)}
          />

          <ReactMarkdown>{await content}</ReactMarkdown>
        </div>

        <button
          className={blogElementStyles.postButton}
          onClick={() => createPostPage(content, textPosts ,index)}
        >
          Read more
        </button>

        <button className={blogElementStyles.postButton}>
          <a href={`${textPosts.html_url}`} target="_blank">
            source
          </a>
        </button>
      </div>
    </article>
  );
});

export default function Blog() {
  return (
    <>
      <Logo />
      <SectionText
        style={`${sectionTextStyle.sectionWrapperBackground}`}
        title={"Welcome to my Web Development Blog"}
        icon={<Icon iconName="fa:FaPenFancy" />}
        mainText={
          "Here, I share insights, tutorials, and tips about modern web development — from front-end design and responsive layouts to back-end technologies and best coding practices. Whether you're a beginner or an experienced developer, you'll find practical knowledge to help you build better, faster, and smarter websites."
        }
      />
      <LightReflections />
      <Suspense fallback={<h1>Loading posts...</h1>}>
        {/* <Post/> */}

        <div className={blogElementStyles.postWrapper}>{post}</div>
      </Suspense>
    </>
  );
}
