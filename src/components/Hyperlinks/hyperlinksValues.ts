type NavLinks = {
  label: string;
  href: string;
};

export default function hyperlinksValues() {
  const navLinks: NavLinks[] = [
    { label: "About Me", href: "#aboutMePosition" },
    { label: "Code Projects", href: "#portfolioPosition" },
    { label: "WordPress Projects", href: "#portfolioWordpressPosition" },
    { label: "Offer", href: "#offerPosition" },
    { label: "Cooperation", href: "#cooperationPosition" },
  ];

  return [navLinks];
}
