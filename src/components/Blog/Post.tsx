// import {
//   postsBlog,
//   contentPosts,
//   createPostPage,
// } from "../Blog/blogSettings.ts";
// import ReactMarkdown from "react-markdown";
// import blogElementStyles from "../Blog/Blog.module.css";

// export default function Post() {
//   const post = postsBlog.map(async (textPosts: any, index: any) => {
//     const content = contentPosts(`${textPosts.download_url}`);
//     return (
//       <article key={textPosts.sha || index}>
//         <div className={blogElementStyles.postElements}>
//           <div className={blogElementStyles.mainPost}>
//             <ReactMarkdown>{await content}</ReactMarkdown>
//           </div>

//           <button
//             className={blogElementStyles.postButton}
//             onClick={() => createPostPage(content, textPosts)}
//           >
//             Read more
//           </button>

//           <button className={blogElementStyles.postButton}>
//             <a href={`${textPosts.html_url}`} target="_blank">
//               source
//             </a>
//           </button>
//         </div>
//       </article>
//     );
//   });

//   return <div className={blogElementStyles.postWrapper}>{post}</div>;
// }
