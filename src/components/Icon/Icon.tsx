import collectionOFicons from "./collectionOFicons";
import iconStyle from "./Icon.module.css";
export default function Icon({ iconName }: { iconName: string }) {
  const IconComponent = collectionOFicons(iconName);
  return IconComponent ? (
    <div className={iconStyle.icon}>
      <IconComponent />
    </div>
  ) : null;
}
