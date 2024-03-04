/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: theme => ({
        'login-page': "url('/public/images/Login.png')",
      }),
      colors: {
        'primary': '#f1b573',
        'secondary': '#f9e1c7'
        }
      }
    },
  plugins: []
}

