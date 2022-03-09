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
  module: {
    ...defaultConfig.module,
    rules: defaultConfig.module.rules.map((rule) => {
      if (
        [String(/\.css$/), String(/\.(sc|sa)ss$/)].includes(String(rule.test))
      ) {
        return {
          ...rule,
          use: rule.use.map((loaderConf) => {
            if (loaderConf.loader.includes('/css-loader/')) {
              loaderConf.options.url = false;
            }
            return loaderConf;
          }),
        };
      }
      return rule;
    }),
  },
  optimization: {
    splitChunks: {
      cacheGroups: {
        style: {
          name(module, chunks) {
            return `${chunks[0].name.replace('/index', '')}/public`;
          },
        },
      },
    },
  },
});
