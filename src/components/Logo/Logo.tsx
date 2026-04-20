import logoStyle from "./Logo.module.css";

export default function Logo() {
  return (
<img className={logoStyle.logo} src="../../../logo.webp" loading="lazy" alt="logo" />
  );
}
