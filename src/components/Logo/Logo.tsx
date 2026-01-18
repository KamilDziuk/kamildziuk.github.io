import logoStyle from "./Logo.module.css";
import HyperlinksIcon from "../Hyperlinks/HyperlinksIcons";

export default function Logo() {
  return (
    <HyperlinksIcon
      styleHyperLinks={logoStyle.logo}
      items={["Dziuk"]}
      hrefs={["/."]}
    />
  );
}
