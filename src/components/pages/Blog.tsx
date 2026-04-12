import { Suspense, lazy, useEffect, useState } from "react";
import LightReflections from "../LightReflections/LightReflections";
import Icon from "../Icon/Icon";
import Categoris from "../Blog/Categoris/PostFilters";
// import { blogPopular, blogTraffic } from "../Blog/blogTraffic";
import { blogTraffic } from "../Blog/blogTraffic";
import BlogSection from "../Section/Section";
import Logo from "../Logo/Logo";
import sectionBlogStyle from "../Section/Section.module.css";
import blogElementStyles from "../Blog/Blog.module.css";
import { Helmet } from "react-helmet-async";
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
  const [traffic, setTraffic] = useState("");
  // const [popular, setPopular] = useState("");
  useEffect(() => {
    async function loadRepoDates() {
      const [update, create] = await repoBlogDateStatus();
      setRepoUpdate(update);
      setRepoCreate(create);
    }

    loadRepoDates();
  }, []);
  async function visitors() {
    const trafficContent = await blogTraffic();
    setTraffic(trafficContent);
  }
  visitors();

  // async function popularVisitors() {
  //   const popularContent = await blogPopular();
  //   setPopular(popularContent);
  // }
  // popularVisitors();

  return (
    <>
      <Helmet>
        <title>Kamil Dziuk - Blog</title>
        <meta
          name="description"
          content="Here, I share insights, tutorials, and tips about modern web development — from front-end design and responsive layouts to back-end technologies and best coding practices."
        />
      </Helmet>

      <Logo />
      <BlogSection
        style={sectionBlogStyle.sectionWrapperBackground}
        title="Welcome to my Web Development Blog"
        icon={<Icon iconName="fa:FaPenFancy" />}
        mainText={`Here, I share insights, tutorials, and tips about modern web development — from front-end design and responsive layouts to back-end technologies and best coding practices.`}
      />
      <BlogSection
        style={sectionBlogStyle.sectionWrapperBackground}
        title={"Timestamps"}
        icon={<Icon iconName="md:MdUpdate" />}
        mainText={`Created at ${repoCreate} | Last update ${repoUpdate}`}
      />
      <BlogSection
        style={sectionBlogStyle.sectionWrapperBackground}
        title={"Visitors"}
        icon={<Icon iconName="fa:FaRegEye" />}
        mainText={<>Blog pageviews: {traffic}</>}
      />
      <BlogSection
        style={sectionBlogStyle.sectionWrapperBackground}
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
