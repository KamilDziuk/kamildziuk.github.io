import LightReflections from "../LightReflections/LightReflections.tsx";

import ReactMarkdown from "react-markdown";
import Logo from "../Logo/Logo.tsx";
import {
  postsBlog,
  contentPosts,
  createPostPage,
} from "../Blog/blogSettings.ts";
import blogElementStyles from "../Blog/Blog.module.css";

const post = postsBlog.map(async (textPosts: any, index: any) => {
  const content = contentPosts(`${textPosts.download_url}`);

  return (
    <div key={textPosts.sha || index}>
      <div className={blogElementStyles.postElements}>
        <div className={blogElementStyles.mainPost}>
          <ReactMarkdown>{await content}</ReactMarkdown>
        </div>

        <button
          className={blogElementStyles.postButton}
          onClick={() => createPostPage(content, textPosts)}
        >
          Read more
        </button>
      </div>
    </div>
  );
});

export default function Blog() {
  return (
    <>
      <Logo />
      <h1>Blog</h1>
      <LightReflections />
      <br></br>
      <h2 className={blogElementStyles.secondBlogText}>Posts</h2>
      <div className={blogElementStyles.postWrapper}>{post}</div>
    </>
  );
}
