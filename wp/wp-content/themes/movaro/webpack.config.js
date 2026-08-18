const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CopyPlugin = require("copy-webpack-plugin");

module.exports = {
    entry: {
        app: path.resolve(__dirname, "assets/js/index.js"),
        // "editor": path.resolve(__dirname, "src/scss/editor.scss"),
    },

    output: {
        path: path.resolve(__dirname, "dist"),
        filename: "[name].js", // bez hashów, WP sam wersjonuje
        clean: true,
        assetModuleFilename: "assets/[name][ext]",
    },

    plugins: [
        new MiniCssExtractPlugin({
            filename: "[name].css",
        }),
        new CopyPlugin({
            patterns: [
                {
                    from: path.resolve(__dirname, "assets/img"),
                    to: "img/[name][ext]",
                    noErrorOnMissing: true,
                },
                {
                    from: path.resolve(__dirname, "assets/js"),
                    to: "js/[name][ext]",
                    noErrorOnMissing: true,
                    globOptions: {
                        ignore: ["**/index.*"],
                    },
                },
            ],
        }),
    ],

    module: {
        rules: [
            // SCSS/CSS
            {
                test: /\.s?css$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    { loader: "css-loader", options: { sourceMap: true } },
                    { loader: "sass-loader", options: { sourceMap: true } },
                ],
            },
            // JS + Babel
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: "babel-loader",
                    options: { presets: ["@babel/preset-env"] },
                },
            },
            // Fonty
            {
                test: /\.(woff2?|eot|ttf|otf)$/i,
                type: "asset/resource",
                generator: { filename: "fonts/[name][ext]" },
            },
            // Obrazy
            {
                test: /\.(png|jpe?g|gif|svg)$/i,
                type: "asset/resource",
                generator: { filename: "img/[name][ext]" },
            },
        ],
    },

    resolve: {
        extensions: [".js", ".scss", ".css"],
        alias: {
            "@": path.resolve(__dirname, "assets"),
        },
    },
};
