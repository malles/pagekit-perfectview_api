<template>
    <div>

        <div class="uk-grid uk-grid-width-medium-1-2" data-uk-grid-margin>
            <div>
                <div class="uk-margin uk-form">

                    <div class="uk-form-row">
                        <label class="uk-form-label">{{ 'Perfectview koppeling' | trans }}</label>
                        <div class="uk-form-controls uk-form-controls-text">
                            <label><input type="checkbox" class="uk-margin-small-right"
                                          v-model="user.data.perfectview_link_person"/>
                            {{ 'Koppel aan persoon' | trans }}</label>
                        </div>
                    </div>

                    <div class="uk-form-row">
                        <label class="uk-form-label">{{ 'Relatiecode persoon' | trans }}</label>
                        <div class="uk-form-controls">
                            <input type="text" v-model="user.data.perfectview_relation_code"
                                   class="uk-form-width-small"/>
                            <a @click="load" class="uk-icon-refresh uk-icon-hover uk-margin-small-left"
                               :class="{'uk-icon-spin': loading}"></a>
                        </div>
                    </div>

                </div>

                <template v-if="user.data.perfectview_link_person && relation.Id">

                    <div class="uk-panel uk-panel-box">
                        <div class="uk-panel-badge uk-badge">{{ 'Persoon' | trans }}</div>
                        <h3 class="uk-panel-title">{{ relation.DisplayName }}</h3>

                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-2-3">
                                <dl class="uk-description-list-horizontal">
                                    <template v-for="value in fieldvalues['Algemeen'] | orderBy 'SortIndex'">
                                        <dt>{{ value.Label }}</dt>
                                        <dd>{{ value.Value || '-' }}</dd>
                                    </template>
                                </dl>
                                <dl>
                                    <template v-for="value in fieldvalues['Systeem'] | orderBy 'SortIndex'">
                                        <dt>{{ value.Label }}</dt>
                                        <dd>{{ value.Value || '-' }}</dd>
                                    </template>
                                </dl>
                            </div>
                            <div class="uk-width-medium-1-3">
                                <dl>
                                    <template v-for="value in fieldvalues['Naam'] | orderBy 'SortIndex'">
                                        <dt>{{ value.Label }}</dt>
                                        <dd>{{ value.Value || '-' }}</dd>
                                    </template>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <template v-if="!relation.IsDummy" v-for="group in datagroups">
                        <template v-if="groupExists('fieldvalues', group)">
                            <h3>{{ group }}</h3>
                            <dl class="uk-description-list-horizontal">
                                <template v-for="value in fieldvalues[group] | orderBy 'SortIndex'">
                                    <dt>{{ value.Label }}</dt>
                                    <dd>{{ value.Value || '-' }}</dd>
                                </template>
                            </dl>
                        </template>

                    </template>
                </template>
                <p v-else class="uk-alert" :class="{'uk-alert-danger': user.data.perfectview_link_person}">
                {{ 'Geen Perfectview persoon gekoppeld' | trans }}</p>
            </div>
            <div>
                <div class="uk-margin uk-form">

                    <div class="uk-form-row">
                        <label class="uk-form-label">{{ 'Perfectview koppeling' | trans }}</label>
                        <div class="uk-form-controls uk-form-controls-text">
                            <label><input type="checkbox" class="uk-margin-small-right"
                                          v-model="user.data.perfectview_link_organisation"/>
                            {{ 'Koppel aan organisatie' | trans }}</label>
                        </div>
                    </div>

                    <div class="uk-form-row">
                        <label class="uk-form-label">{{ 'Relatiecode organisatie' | trans }}</label>
                        <div class="uk-form-controls">
                            <input type="text" class="uk-form-width-small"
                                   v-model="user.data.perfectview_parent_relation_code"/>
                            <a @click="load" class="uk-icon-refresh uk-icon-hover uk-margin-small-left"
                               :class="{'uk-icon-spin': loading}"></a>
                        </div>
                    </div>

                </div>

                <template v-if="user.data.perfectview_link_organisation && parent_relation.Id">
                    <div class="uk-panel uk-panel-box">
                        <div class="uk-panel-badge uk-badge">{{ 'Organisatie' | trans }}</div>
                        <h3 class="uk-panel-title">{{ parent_relation.DisplayName }}</h3>

                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-2-3">
                                <dl class="uk-description-list-horizontal">
                                    <template v-for="value in parent_fieldvalues['Algemeen'] | orderBy 'SortIndex'">
                                        <dt>{{ value.Label }}</dt>
                                        <dd>{{ value.Value || '-' }}</dd>
                                    </template>
                                </dl>
                                <dl>
                                    <template v-for="value in parent_fieldvalues['Systeem'] | orderBy 'SortIndex'">
                                        <dt>{{ value.Label }}</dt>
                                        <dd>{{ value.Value || '-' }}</dd>
                                    </template>
                                </dl>
                            </div>
                            <div class="uk-width-medium-1-3">
                                <dl>
                                    <template v-for="value in parent_fieldvalues['Naam'] | orderBy 'SortIndex'">
                                        <dt>{{ value.Label }}</dt>
                                        <dd>{{ value.Value || '-' }}</dd>
                                    </template>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <template v-if="!parent_relation.IsDummy" v-for="group in parent_datagroups">
                        <template v-if="groupExists('parent_fieldvalues', group)">
                            <h3>{{ group }}</h3>
                            <dl class="uk-description-list-horizontal">
                                <template v-for="value in parent_fieldvalues[group] | orderBy 'SortIndex'">
                                    <dt>{{ value.Label }}</dt>
                                    <dd>{{ value.Value || '-' }}</dd>
                                </template>
                            </dl>
                        </template>
                    </template>
                </template>
                <p v-else class="uk-alert" :class="{'uk-alert-danger': user.data.perfectview_link_organisation}">
                {{ 'Geen organisatie gekoppeld' | trans }}</p>
            </div>
        </div>

    </div>
</template>

<script>

module.exports = {

    props: ['user', 'config', 'form',],

    data: function () {
        return {
            loading: false,
            relation: {},
            fieldvalues: {},
            parent_relation: {},
            parent_fieldvalues: {},
            datagroups: ['Communicatie', 'Adressering', 'Privé communicatie', 'Social media', 'Privé adres', 'Afwijkend adres',
                'Identificatie', 'Bank', 'Administratie', 'Financieel', 'Audittrail',],
            parent_datagroups: ['Bezoekadres', 'Communicatie', 'Adressering', 'Social media', 'Typering', 'Postadres', 'Factuuradres',
                'Identificatie', 'Bank', 'Administratie', 'Financieel', 'Afwijkend', 'Audittrail',],
        };
    },

    created: function () {
        this.load();
    },

    methods: {
        load: function () {
            this.loading = true;
            this.$resource('api/perfectview_api/userrelations{/id}').save({id: this.user.id,}, {user: this.user,}).then(function (res) {
                this.relation = res.data.relation;
                this.parent_relation = res.data.parent_relation;
                this.$set('user.data.perfectview_relation_code', res.data.relation_code);
                this.$set('user.data.perfectview_parent_relation_code', res.data.parent_relation_code);
                this.fieldvalues = _.groupBy(this.relation.fieldDataValues, 'CategoryName');
                this.parent_fieldvalues = _.groupBy(this.parent_relation.fieldDataValues, 'CategoryName');
                this.loading = false;
            }, function (res) {
                this.$notify(res.data.message || res.data, 'danger');
                this.loading = false;
            })
        },
        groupExists: function (groups, groupname) {
            return this[groups][groupname] && this[groups][groupname].length;
        },
    },

    section: {
        label: 'Perfectview',
        priority: 500,
    },

};

window.User.components['user-section-perfectview:perfectview'] = module.exports;

</script>
