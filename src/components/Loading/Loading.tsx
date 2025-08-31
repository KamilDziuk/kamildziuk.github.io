import loadingStyles from "./Loading.module.css";
import useLoadingUtils from "./useLoadingUtils";

export default function Loading() {
  const symbols = useLoadingUtils();
  return (
    <>
      {symbols && (
        <div className={loadingStyles.loading}>
          <div className={loadingStyles.landingTextContener}>
            <div className={loadingStyles.landingText}>{symbols} </div>
          </div>
        </div>
      )}
    </>
  );
}
