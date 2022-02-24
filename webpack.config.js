/* eslint-disable no-undef */
const defaultConfig = require('@wordpress/scripts/config/webpack.config');
const CopyPlugin = require('copy-webpack-plugin');
const glob = require('glob');
const merge = require('lodash/merge');

module.exports = merge(defaultConfig, {
  entry: glob.sync('./src/**/index.js').reduce((acc, path) => {
    const entry = path.replace('./src/', '').replace('.js', '');
    acc[entry] = path;
    return acc;
  }, {}),
  plugins: [
    ...defaultConfig.plugins,
    new CopyPlugin({
      patterns: [
        {
          from: 'src/**/block.json',
          to({ absoluteFilename }) {
            return absoluteFilename.replace(
              '/babymountain-2022/src/',
              '/babymountain-2022/build/'
            );
          },
        },
      ],
    }),
  ],
  optimization: {
    splitChunks: {
      cacheGroups: {
        style: {
          name(module, chunks) {
            return `${chunks[0].name.replace('/index', '')}/style-index`;
          },
        },
      },
    },
  },
});
