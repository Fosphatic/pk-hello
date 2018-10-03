module.exports = {

    el: '#hello',

    data: {
        name: {},
        email: {},
        message: {},
        error: null
    },

    methods: {

        submit: function () {

            this.error = null;

            this.$http.post('hello/hello/submit', {name: this.name}, {email: this.email}, {message: this.message}).then(function (res) {
                    window.location.replace(res.data.redirect);
            }, function (error) {
                    this.error = error.data;
                }
            );
        }

    }

};

Vue.ready(module.exports);
