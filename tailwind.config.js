/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    container: {
      center: true,
      padding: "16px",
    },
    extend: {
      colors: {
        primary: "#030723",
        secondary: "#3b82f6",
      },
      screens: {
        "2xl": "1320px",
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
