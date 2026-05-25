import type { JSX } from "react";
import navigationIndicatorStyle from "./Hyperlinks.module.css";
import useNavigationIndicator from "./useNavigationIndicator";
export default function HyperlinksIcon({
  hrefs,
  items,
  ariaLabels,
  styleHyperLinks,
  wrapper: Wrapper = "div",
}: {
  hrefs: string[] | string;
  items: (string | JSX.Element)[];
  ariaLabels?: string[];
  styleHyperLinks?: string;
  wrapper?: React.ElementType;
}) {
  const [navigationIndicatorOn, navigationIndicatorOff] =
    useNavigationIndicator();

  const handleClick = (href: string) => {
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
          aria-label={ariaLabels?.[index]}
          onClick={() => handleClick(hrefs[index])}
        >
          {item}
        </a>
      ))}
    </Wrapper>
  );
}
