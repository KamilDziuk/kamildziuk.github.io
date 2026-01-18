import blogElementStyles from "../Blog.module.css";
import { usePostLengthStatus } from "../usePost";


export default function PostFilters() {
  const postLengthStatus = usePostLengthStatus();
  return (
    <div className={blogElementStyles.postStatusElements}>
      <p> Post number: {postLengthStatus}</p>
    </div>
  );
}
