module.exports = {
    mode: 'development',
    entry: `./src/js/index.js`,
    output: {
        path: `${__dirname}/js`,
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