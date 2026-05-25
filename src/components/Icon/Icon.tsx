import collectionOFicons from "./collectionOFicons";
import iconStyle from "./Icon.module.css";
export default function Icon({
  iconName,
  ariaLabel,
}: {
  iconName: string;
  ariaLabel?: string;
}) {
  const IconComponent = collectionOFicons(iconName);
  return IconComponent ? (
    <div aria-label={ariaLabel} className={iconStyle.icon}>
      <IconComponent />
    </div>
  ) : null;
}
