/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      backgroundImage:{
        'latar':"url('../../public/assets/images/bg.svg')",
      }
    },
  },
  plugins: [
      require('flowbite/plugin')
  ],
}
