import { contentPosts, postImages } from "../Blog/blogSettings.ts";
import { useEffect, useState } from "react";
export default function usePost(
  textPosts: string,
  index: string
): [string, string] {
  const [postText, setPostText] = useState("");
  const [postImage, setPostImage] = useState("");
  useEffect(() => {
    const post = contentPosts(`${textPosts}`);

    async function postTextContent() {
      setPostText(await post);
    }

    postTextContent();

    async function postImageContent() {
      setPostImage(await postImages(index));
    }
    postImageContent();
  }, []);

  return [postText, postImage];
}
