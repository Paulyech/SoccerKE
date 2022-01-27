const colors = require('tailwindcss/colors')


module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      colors :{
        'cyan' : colors.cyan,
        'teal' : colors.teal
      }

    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}





