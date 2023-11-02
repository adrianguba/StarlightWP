const path = require( 'path' );
const MiniCssExtractPlugin = require( 'mini-css-extract-plugin' );

module.exports = {
	entry: [
		'./content/themes/starter-theme/src/_index.js',
		'./content/themes/starter-theme/src/_index.css'
	],
	output: {
		filename: 'index.js',
		path: path.resolve( __dirname, './content/themes/starter-theme/dist' )
	},
	module: {
		rules: [
			{
				test: /\.css$/i,
				use: [
					MiniCssExtractPlugin.loader,
					{
						loader: 'css-loader',
						options: {
							importLoaders: 1,
						}
					},
					'postcss-loader'
				]
			}
		]
	},
	plugins: [
		new MiniCssExtractPlugin({
			filename: "index.css"
		}),
	],
};