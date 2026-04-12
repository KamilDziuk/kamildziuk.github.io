import { postsBlog } from "../Blog/blogSettings.ts";
import { createPostPage } from "../Blog/postPage.ts";
import usePost from "./usePost.ts";
import useSearch from "./useSearch.ts";
import ReactMarkdown from "react-markdown";
import blogElementStyles from "../Blog/Blog.module.css";
import Media from "../Media/Media.tsx";

export default function Post({ search }: { search: string }) {
  const post = postsBlog.map(async (textPosts: any, index: any) => {

    const [postText, postImage] = usePost(textPosts.download_url, index);
    const regex = useSearch(search);

    if (Boolean(postText.match(regex)) == true) {
      return (
        <article key={textPosts.sha || index}>
          <div className={blogElementStyles.postElements}>
            
            <Media
              mediaStyle={blogElementStyles.pagePostImages}
              media={postImage}
              alt={`post image named ${textPosts.name}`}
            />

            <div className={blogElementStyles.mainPost}>
              <ReactMarkdown>{postText}</ReactMarkdown>
            </div>
            <button
              className={blogElementStyles.postButton}
              onClick={() => createPostPage(postText, textPosts, index)}
            >
              Read more...
            </button>

            <button className={blogElementStyles.postButton}>
              <a href={`${textPosts.html_url}`} target="_blank">
                Source
              </a>
            </button>
          </div>
        </article>
      );
    }
  });
  return <div className={blogElementStyles.postWrapper}>{post}</div>;
}
