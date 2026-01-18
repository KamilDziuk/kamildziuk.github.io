type NavLinks = {
  label: string;
  href: string;
};

export default function hyperlinksValues() {
  const navLinks: NavLinks[] = [
    { label: "About Me", href: "#aboutMePosition" },
    { label: "Projects", href: "#portfolioPosition" },
    { label: "Offer", href: "#offerPosition" },
    { label: "Cooperation", href: "#cooperationPosition" },
  ];

  return [navLinks];
}
