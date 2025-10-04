import logoStyle from "./Logo.module.css";
import Hyperlinks from "../Hyperlinks/Hyperlinks";

export default function Logo() {
  return (
    <Hyperlinks
      styleHyperLinks={logoStyle.logo}
      items={["Dziuk"]}
      hrefs={["/."]}
    />
  );
}
