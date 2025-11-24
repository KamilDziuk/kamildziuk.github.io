import LightReflections from "../LightReflections/LightReflections.tsx";
import Icon from "../Icon/Icon";
import Categoris from "../Blog/Categoris/PostFilters.tsx";
import { Suspense } from "react";
import sectionTextStyle from "../SectionText/SectionText.module.css";
import SectionText from "../SectionText/SectionText";
import Logo from "../Logo/Logo.tsx";
import React from "react";
const Post = React.lazy(() => import("../Blog/Post.tsx"));

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
      <SectionText
        style={`${sectionTextStyle.sectionWrapperBackground}`}
        title={null}
        icon={null}
        mainText={<Categoris />}
      />
      <LightReflections />
      <Suspense fallback={<h1>Loading posts...</h1>}>
        <Post />
      </Suspense>
    </>
  );
}
