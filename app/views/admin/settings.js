module.exports = {

    el: '#perfectview_api-settings',

    data: function () {
        return _.merge({
            users: [],
            workflows: [],
            entityTypes: [],
            config: {},
            form: {}
        }, window.$data);
    },

    computed: {
        communication_workflow_steps: function () {
            var Id = this.config.communication_workflow, workflow = _.find(this.workflows, function (workflow) {
                return workflow.workflow.Id === Id;
            });
            return workflow ? workflow.steps : [];
        }
    },

    watch: {
        'config.communication_workflow': function () {
            this.config.communication_workflow_step = '';
        }
    },

    methods: {

        save: function () {
            this.$http.post('admin/perfectview_api/config', { config: this.config }).then(function () {
                this.$notify('Settings saved.');
            }, function (res) {
                this.$notify(res.data, 'danger');
            });
        },

        addParameter: function () {
            this.config.url_parameters.push({key: '', value: ''});
        }

    }

};

Vue.ready(module.exports);
