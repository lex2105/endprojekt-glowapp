module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        "peach-skin": "#D97870",
        "cream-ish": "#FEF6EF",
        "brown-ish": "#592A20",
      },
      backgroundImage: {
        "hero-img": "url('/img/hero-img.png')",
      },
    },
  },
  plugins: [],
};
