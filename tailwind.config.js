/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.html', // Look for all HTML files in the 'insurance' directory
  ],
  theme: {
    extend: {
      colors:{
        fontcolor:"#22227c"
      },
      fontFamily:{
        bebas: ['"Bebas Neue"', 'sans-serif'],
        futuraAlt: ['Montserrat', 'sans-serif'], // Montserrat as an alternative to Futura
        // Include Bebas Neue as a custom font
      }
    },
  },
  plugins: [],
}