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
        'index': "url('/public/images/login-bg.png')",
      }),
      colors: {
        'primary': '#FFE5B4',
        'secondary': '#FFFFE0',
        'btn' : '#1F2022',
        'accent1' : '#E7E7E7' 
      },
      height: {
        '100': '30rem'
      },
      width: {
        '100': '30rem'
      }
    }
  },
  plugins: []
}

