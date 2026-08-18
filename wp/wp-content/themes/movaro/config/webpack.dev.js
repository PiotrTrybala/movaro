const { merge } = require("webpack-merge");
const common = require("../webpack.config.js");

module.exports = merge(common, {
    mode: "development",
    devtool: "source-map",
    watchOptions: {
        ignored: /node_modules/,
        poll: 1000, // ważne dla Docker / Vagrant
    },
});