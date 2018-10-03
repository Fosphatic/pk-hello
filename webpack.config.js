module.exports = [

    {
        entry: {
            "settings": "./app/views/settings.js",
            "link": "./app/components/link.vue",
            "dashboard": "./app/components/dashboard.vue",
            "helloform": "./app/components/helloform.vue"
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
