import { Suspense, lazy, useEffect, useState } from "react";

import LightReflections from "../LightReflections/LightReflections";
import Icon from "../Icon/Icon";
import Categoris from "../Blog/Categoris/PostFilters";
import SectionText from "../SectionText/SectionText";
import Logo from "../Logo/Logo";

import sectionTextStyle from "../SectionText/SectionText.module.css";
import blogElementStyles from "../Blog/Blog.module.css";

import { repoBlogDateStatus } from "../Blog/blogSettings";

const Post = lazy(() => import("../Blog/Post"));

export function useSearchValue() {
  const [search, setSearch] = useState<string>("");

  return { search, setSearch };
}

export default function Blog() {
  const { search, setSearch } = useSearchValue();
  useEffect(() => {
    setSearch(search);
  }, [search]);
  const [repoCreate, setRepoCreate] = useState("");
  const [repoUpdate, setRepoUpdate] = useState("");

  useEffect(() => {
    async function loadRepoDates() {
      const [update, create] = await repoBlogDateStatus();
      setRepoUpdate(update);
      setRepoCreate(create);
    }

    loadRepoDates();
  }, []);

  return (
    <>
      <Logo />

      <SectionText
        style={sectionTextStyle.sectionWrapperBackground}
        title="Welcome to my Web Development Blog"
        icon={<Icon iconName="fa:FaPenFancy" />}
        mainText={`Here, I share insights, tutorials, and tips about modern web development — from front-end design and responsive layouts to back-end technologies and best coding practices.`}
      />

      <SectionText
        style={sectionTextStyle.sectionWrapperBackground}
        title={null}
        icon={null}
        mainText={`Created at ${repoCreate} | Last update ${repoUpdate}`}
      />

      <SectionText
        style={sectionTextStyle.sectionWrapperBackground}
        title={null}
        icon={null}
        mainText={<Categoris />}
      />

      <LightReflections />
      <input
        className={blogElementStyles.search}
        type="search"
        autoFocus
        placeholder="Search posts..."
        onChange={(e) => setSearch(e.target.value)}
      />
      <br />
      <br />
      <Suspense fallback={<h1>Loading posts...</h1>}>
        <Post search={search} />
      </Suspense>
    </>
  );
}
