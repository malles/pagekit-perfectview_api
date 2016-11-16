module.exports = [

    {
        entry: {
            /*admin views*/
            "perfectview_api-settings": "./app/views/admin/settings.js",
            "user-section-perfectview": "./app/components/user-section-perfectview.vue",
        },
        output: {
            filename: "./app/bundle/[name].js"
        },
        externals: {
            "lodash": "_",
            "jquery": "jQuery",
            "uikit": "UIkit",
            "vue": "Vue"
        },
        module: {
            loaders: [
                {test: /\.vue$/, loader: "vue"},
                {test: /\.html$/, loader: "vue-html"},
                {test: /\.js/, loader: 'babel', query: {presets: ['es2015']}}
            ]
        }

    }

];
