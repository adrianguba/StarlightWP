/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
	"./content/mu-plugins/acf-custom-blocks/blocks/**/*.php",
	"./content/themes/starter-theme/*.php",
	"./content/themes/starter-theme/template-parts/*.php",
	"./content/themes/starter-theme/template-parts/**/*.php"
],
  theme: {
    extend: {},
  },
  plugins: [],
}

