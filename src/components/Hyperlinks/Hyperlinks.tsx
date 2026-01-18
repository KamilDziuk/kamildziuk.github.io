import type { JSX } from "react";
import navigationIndicatorStyle from "./Hyperlinks.module.css";
import useNavigationIndicator from "./useNavigationIndicator";
export default function Hyperlinks({
  hrefs,
  items,
  styleHyperLinks,
  wrapper: Wrapper = "div",
}: {
  hrefs: string[] | string;
  items: (string | JSX.Element)[];
  styleHyperLinks?: string;
  wrapper?: React.ElementType;
}) {
  const [navigationIndicatorOn, navigationIndicatorOff] =
    useNavigationIndicator();

  const handleClick = (
    e: React.MouseEvent<HTMLAnchorElement>,
    href: string
  ) => {
    e.preventDefault();
    const element = document.querySelector(href);
    if (element) {
      element.scrollIntoView({ behavior: "smooth" });
    }
  };

  return (
    <Wrapper>
      {items.map((item, index) => (
        <a
          className={` ${styleHyperLinks} ${
            navigationIndicatorStyle.navigationIndicator
          } ${
            navigationIndicatorOn[index] &&
            navigationIndicatorStyle.navigationIndicatorOn
          } ${
            navigationIndicatorOff[index] &&
            navigationIndicatorStyle.navigationIndicatorOff
          }`}
          key={index}
          href={hrefs[index]}
          onClick={(e) => handleClick(e, hrefs[index])}
        >
          {item}
        </a>
      ))}
    </Wrapper>
  );
}
