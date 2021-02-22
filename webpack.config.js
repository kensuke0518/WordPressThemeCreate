module.exports = {
    mode: 'development',
    entry: `./src/js/index.js`,
    output: {
        path: `${__dirname}/themes/test/js`,
        filename: 'index.js'
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                use: [
                    {
                        loader: 'babel-loader',
                        options: {
                            presets: [
                                '@babel/preset-env',
                            ]
                        }
                    }
                ]
            }
        ]
    },
    target: ["web", "es5"],
};