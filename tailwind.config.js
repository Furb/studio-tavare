module.exports = {
  content: ["./**/*.php", "./js/*.js"],
  theme: {
    extend: {
      fontFamily: {
        body: "'Roboto', sans-serif;",
      },
      container: {
        center: true,
      },
    },
    colors: {
      white: "#f7f7f7",
      black: "#121212",
    },
  },
  plugins: [require("@tailwindcss/typography")],
};
