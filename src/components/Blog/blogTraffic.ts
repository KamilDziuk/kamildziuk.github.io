export async function blogTraffic() {
  const trafficAPI = await fetch(
    "https://umami-two-tau.vercel.app/api/umami-stats",
  );
  if (!trafficAPI.ok) {
    throw new Error("Failed to fetch traffic");
  }
  const cunterTraffic = await trafficAPI.json();
  return cunterTraffic.pageviews;
}
// export async function blogPopular() {
//   const popularAPI = await fetch("https://secret-token.vercel.app/api/popular");
//   if (!popularAPI.ok) {
//     throw new Error("Failed to fetch popular");
//   }
//   const cunterPopular = await popularAPI.json();
//   const cunterPopularAll = cunterPopular.map((popular: any) => {
//     return popular.path;
//   });
//   return cunterPopularAll.join("\n\n\n");
// }
