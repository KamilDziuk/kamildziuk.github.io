import * as IconsFA from "react-icons/fa";
import * as IconsRI from "react-icons/ri";
import * as IconsMD from "react-icons/md";
import * as IconsIO5 from "react-icons/io5";
export default function collectionOFicons(iconName: string) {
  const iconLibraries: any = {
    fa: IconsFA,
    ri: IconsRI,
    md: IconsMD,
    io5: IconsIO5,
  };

  const [libKey, iconKey] = iconName.split(":");
  const library = iconLibraries[libKey];
  const IconComponent = library?.[iconKey];
  return IconComponent;
}
