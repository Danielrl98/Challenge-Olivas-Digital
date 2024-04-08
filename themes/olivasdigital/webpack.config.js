const path = require('path');

module.exports = {
  entry: './src/index.ts', // Arquivo de entrada TypeScript
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'bundle.js',
  },
  module: {
    rules: [
      // Regra para arquivos TypeScript
      {
        test: /\.tsx?$/,
        use: 'ts-loader',
        exclude: /node_modules/,
      },
      // Regra para arquivos Sass
      {
        test: /\.s[ac]ss$/i,
        use: [
          // Adiciona os estilos ao DOM via tag <style>
          'style-loader',
          // Interpreta @import e url() como import/require()
          'css-loader',
          // Compila Sass para CSS
          'sass-loader',
        ],
      },
    ],
  },
  resolve: {
    extensions: ['.tsx', '.ts', '.js'],
  },
  devServer: {
    contentBase: './dist',
  },
};