/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/views/layouts/app.blade.php",
    "./resources/views/auth/register.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
