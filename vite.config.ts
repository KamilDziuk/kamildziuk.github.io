import { defineConfig } from "vite";
import react from "@vitejs/plugin-react-swc";
import { VitePWA } from "vite-plugin-pwa";
export default defineConfig({
  plugins: [
    react(),

    VitePWA({
      registerType: "autoUpdate",
      includeAssets: ["favicon.svg", "robots.txt", "apple-touch-icon.png"],
      manifest: {
        name: "Kamil Dziuk — Web Developer",
        short_name: "Kamil Dziuk — Web Developer",
        description:
          "I create modern web interfaces. I focus on readable code and solid architecture",
        theme_color: "rgb(5, 5, 55)",
        background_color: "rgb(5, 5, 55)",
        display: "standalone",
        start_url: "/",
        icons: [
          {
            src: "icons/icon-192x192.png",
            sizes: "192x192",
            type: "image/png",
          },
          {
            src: "icons/icon-512x512.png",
            sizes: "512x512",
            type: "image/png",
          },
          {
            src: "icons/icon-512x512-maskable.png",
            sizes: "512x512",
            type: "image/png",
            purpose: "maskable",
          },
        ],
      },
      //   workbox: {
      //     cleanupOutdatedCaches: true,
      //     clientsClaim: true,
      //     runtimeCaching: [
      //       {
      //         urlPattern: ({ request }) => request.destination === "document",
      //         handler: "NetworkFirst",
      //         options: {
      //           cacheName: "pages-cache",
      //         },
      //       },
      //       {
      //         urlPattern: ({ request }) =>
      //           request.destination === "script" ||
      //           request.destination === "style",
      //         handler: "StaleWhileRevalidate",
      //         options: {
      //           cacheName: "assets-cache",
      //         },
      //       },
      //       {
      //         urlPattern: ({ request }) =>
      //           request.destination === "image" || request.destination === "font",
      //         handler: "CacheFirst",
      //         options: {
      //           cacheName: "static-cache",
      //           expiration: {
      //             maxEntries: 100,
      //             maxAgeSeconds: 60 * 60 * 24 * 30,
      //           },
      //         },
      //       },
      //     ],
      //   },
    }),
  ],
  base: "/",
});
