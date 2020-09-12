module.exports = {
  purge: ["./resources/views/**/*.blade.php", "./resources/css/**/*.css"],
  theme: {
    extend: {
      screens: {
        'sm': "640px",
        // => @media (min-width: 640px) { ... }

        'md': "768px",

        'lg': "1024px",
        // => @media (min-width: 1024px) { ... }

        'xl': "1280px",
        // => @media (min-width: 1280px) { ... }

        "2xl": "1600px"
        // => @media (min-width: 1600px) { ... }
      },
      colors: {
        "light-back": "#fafafa",
        "light-gray": "#f1f1f1",
        "main-yellow": "#fdcb46",
        "red-step": "#faf8f0"
      }
    }
  },
  variants: {},
  plugins: [require("@tailwindcss/ui")]
};
