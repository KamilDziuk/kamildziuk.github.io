export default async function blogTraffic() {
  const trafficAPI = await fetch(
    "https://secret-token-55sd.vercel.app/api/traffic",
  );

  const cunterTraffic = await trafficAPI.json();

  return cunterTraffic.count;
}
