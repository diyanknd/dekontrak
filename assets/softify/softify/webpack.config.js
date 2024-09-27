const path = require('path')
const CopyPlugin = require('copy-webpack-plugin')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const fs = require('fs')
const HtmlWebpackPlugin = require('html-webpack-plugin')
const HtmlWebpackSimpleIncludePlugin = require('html-webpack-simple-include-plugin')
const autoprefixer = require('autoprefixer')

// Define the root directory containing the HTML files
const rootDirectory = path.resolve(__dirname, 'src')

function generateHtmlPlugins(rootDir) {
  const plugins = []
  // Read the root directory
  const files = fs.readdirSync(rootDir)

  // Filter HTML Pages files
  const htmlPageFiles = files.filter((file) => path.extname(file) === '.html')
  // Loop through HTML files
  htmlPageFiles.forEach((file) => {
    plugins.push(
      new HtmlWebpackPlugin({
        filename: file,
        template: path.join(rootDir, file) // Fix: Change `directory` to `rootDir`
      })
    )
  })

  return plugins
}

const htmlFiles = generateHtmlPlugins(rootDirectory)

const partialFiles = ['customizer', 'dashboard-footer', 'loader', 'pagination', 'navigation', 'section-divider', 'verti-option'].map((partial) => {
  return {
    tag: `<include-${partial} />`,
    content: fs.readFileSync(path.resolve(__dirname, `src/partials/${partial}.html`))
  }
})

module.exports = {
  entry: {
    main: './src/assets/js/main.js'
  },
  mode: 'development',
  devServer: {
    watchFiles: ['src/**/*'],
    hot: true,
    port: 3003
  },
  module: {
    rules: [
      {
        test: /\.css$/i,
        use: [MiniCssExtractPlugin.loader, 'css-loader', 'postcss-loader']
      },
      {
        test: /\.(scss)$/,
        use: [
          {
            // Adds CSS to the DOM by injecting a `<style>` tag
            loader: MiniCssExtractPlugin.loader
          },
          {
            // Interprets `@import` and `url()` like `import/require()` and will resolve them
            loader: 'css-loader'
          },
          {
            // Loader for webpack to process CSS with PostCSS
            loader: 'postcss-loader',
            options: {
              postcssOptions: {
                plugins: [autoprefixer]
              }
            }
          },
          {
            // Loads a SASS/SCSS file and compiles it to CSS
            loader: 'sass-loader'
          }
        ]
      },
      {
        test: /\.(png|svg|jpg|jpeg|gif)$/i,
        type: 'asset/resource',
        generator: {
          filename: 'assets/images/[name][ext]'
        }
      }
    ]
  },
  resolve: {
    extensions: ['.tsx', '.ts', '.js']
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: 'assets/css/style.css'
    }),
    new CopyPlugin({
      patterns: [{ from: 'src/assets', to: 'assets' }]
    }),

    // other plugins...
    ...htmlFiles,
    // Add multiple HtmlWebpackSimpleIncludePlugin instances using the array
    new HtmlWebpackSimpleIncludePlugin([...partialFiles])
  ],
  output: {
    filename: 'assets/js/app.js',
    path: path.resolve(__dirname, 'dist'),
    clean: true
  }
}
