/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/*import VueRouter from 'vue-router'
Vue.use(VueRouter)

const routes = [
  { path: '/', component: require('./components/ExampleComponent.vue') }
]

const router = new VueRouter({
  routes 
})

const app = new Vue({
  route
}).$mount('#app')*/

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
const app = new Vue({
    el: '#app',
});
