import React, { Suspense } from "react";
import LightReflections from "../LightReflections/LightReflections.tsx";
import Header from "../Header/Header.tsx";
import Logo from "../Logo/Logo.tsx";
import Section from "../Section/Section.tsx";
import SectionContentList from "../Section/SectionContentList.tsx";
import { Helmet } from "react-helmet-async";

const AssistantAI = React.lazy(() => import("../AssistantAI/AssistantAI.tsx"));

export default function Home() {
  return (
    <>
      <Helmet>
        <title>Kamil Dziuk - Websites and Web applications</title>
        <meta
          name="description"
          content="Kamil Dziuk - modern web developer creating web applications and interfaces."
        />

        <meta property="og:type" content="website" />
        <meta property="og:title" content="Kamil Dziuk - Web Developer" />
        <meta
          property="og:description"
          content="Modern web developer creating web applications."
        />
      </Helmet>

      <LightReflections />
      <Logo />

      <Header />

      {SectionContentList().map((section, i) => (
        <Section key={i} {...section} />
      ))}

      <Suspense fallback={null}>
        <AssistantAI />
      </Suspense>
    </>
  );
}
