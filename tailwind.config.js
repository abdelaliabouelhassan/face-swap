/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily:{
        krona: ['Krona One', 'sans-serif'],
        manrope: ['Manrope','sans-serif'],
        kosugi: ['Kosugi Maru', 'sans-serif']
      }
    },
  },
  plugins: [],
}