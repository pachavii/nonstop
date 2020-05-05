/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.axios= require('axios');
import VueApexCharts from 'vue-apexcharts'
import Vue from 'vue'
import Vuetify from 'vuetify'

Vue.use(Vuetify)

Vue.component('booklist', require('./components/book.vue').default);
Vue.component('createbook', require('./components/createbook.vue').default);
Vue.component('editbook', require('./components/editbook.vue').default);
Vue.component('publisherlist', require('./components/publisher.vue').default);
Vue.component('createpublisher', require('./components/createpublisher.vue').default);
Vue.component('publisherdetail', require('./components/publisherdetail.vue').default);
Vue.component('editpublisher', require('./components/editpublisher.vue').default);
Vue.component('subagentlist', require('./components/subagent.vue').default);
Vue.component('subagentdetail', require('./components/subagentdetail.vue').default);
Vue.component('editsubagent', require('./components/editsubagent.vue').default);
Vue.component('memberlist', require('./components/member.vue').default);
Vue.component('createmember', require('./components/createmember.vue').default);
Vue.component('memberdetail', require('./components/memberdetail.vue').default);
Vue.component('editmember', require('./components/editmember.vue').default);
Vue.component('recievebook', require('./components/recievebook.vue').default);
Vue.component('storeanalyse', require('./components/storeanalyse.vue').default);
Vue.component('apexchart', VueApexCharts);
Vue.component('returnlist', require('./components/returnlist.vue').default);
Vue.component('returnlistdata', require('./components/returnlistdata.vue').default);
Vue.component('suborder', require('./components/suborder.vue').default);
//Vue.component('subreturnlist', require('./components/subreturn.vue').default);
Vue.component('payment', require('./components/payment.vue').default);


window.onload = function () {
    const app = new Vue({
    el: '#app'
    });
}

// import Vue from 'vue'
// import vuetify from '@/plugins/vuetify' // path to vuetify export

// new Vue({
//   vuetify,
// }).$mount('#app')