import { defineConfig, presetWind4, presetAttributify } from "unocss";

export default defineConfig({
  presets: [
    presetWind4({
      reset: true,
    }),
    presetAttributify(),
  ],
});
