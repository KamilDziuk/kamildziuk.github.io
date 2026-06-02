import logoStyle from "./Logo.module.css";

export default function Logo() {


  return (
    <a href="/" aria-label="Go to homepage" >
      <img
        className={logoStyle.logo}
        
        src="../../../logo.webp"
        loading="lazy"
        alt=""
      />
    </a>
  );
}
