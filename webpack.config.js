module.exports = [

    {
        entry: {
            "settings": "./app/views/settings.js",
            "hello": "./app/views/hello.js",
            "link": "./app/components/link.vue",
            "dashboard": "./app/components/dashboard.vue",
            "generator": "./app/components/generator.vue"
        },
        output: {
            filename: "./app/bundle/[name].js"
        },
        module: {
            loaders: [
                { test: /\.vue$/, loader: "vue" }
            ]
        }
    }

];
