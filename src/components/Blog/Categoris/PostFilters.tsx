import blogElementStyles from "../Blog.module.css";
import { postsBlog } from "../blogSettings.ts";
import { useEffect, useState } from "react";
export default function PostFilters() {
  const [postLengthStatus, setPostLengthStatus] = useState<number>();
  useEffect(() => {
    const postLength = postsBlog;

    setPostLengthStatus(postLength.length);
  }, []);

  return (
    <div className={blogElementStyles.postStatusElements}>
    <p> Post number: {postLengthStatus}</p>
    </div>
  );
}
