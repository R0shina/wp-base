const colors = require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme')

const round = num =>
  num
    .toFixed(7)
    .replace(/(\.[0-9]+?)0+$/, '$1')
    .replace(/\.0$/, '')
const rem = px => `${round(px / 16)}rem`

module.exports = {
  content: [
    './404.php',
    './footer.php',
    './header.php',
    './index.php',
    './page.php',
    './single.php',
    './lib/**/*.php',
    './components/**/*.php',
    './src/js/**/*.js',
  ],
  safelist: [],
  theme: {
    fontFamily: {
      body: ['OpenSans', ...defaultTheme.fontFamily.sans],
      heading: ['Barlow', ...defaultTheme.fontFamily.serif],
    },
    screens: {
      xs: '370px',
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      '2xl': '1536px',
      '4k': '2560px',
    },
    extend: {
      colors: {
      },
    },
  },
  corePlugins: {
    container: false,
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/line-clamp'),
    require('@tailwindcss/container-queries'),
  ],
}
