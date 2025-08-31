import { useState, useEffect } from "react";

export default function useNavigationIndicator() {
  const [navigationIndicatorOn, setNavigationIndicatorOn] = useState<boolean[]>(
    []
  );
  const [navigationIndicatorOff, setNavigationIndicatorOff] = useState<
    boolean[]
  >([]);
  useEffect(() => {
    function navigationIndicatorStatus() {
      const windowHeightPositionValues = [0, 300, 1900, 2700];
      const windowHeightPositionValuesHide = [300, 1900, 2700, 4000];
      const windowHeightPosition = window.scrollY;
      setNavigationIndicatorOn(
        windowHeightPositionValues.map((whpv) => whpv < windowHeightPosition)
      );

      setNavigationIndicatorOff(
        windowHeightPositionValuesHide.map((awd) => awd < windowHeightPosition)
      );
    }
    window.addEventListener("scroll", navigationIndicatorStatus);
  }, []);

  return [navigationIndicatorOn, navigationIndicatorOff];
}
