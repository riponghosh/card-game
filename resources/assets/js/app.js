
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');

import router from './routes';
Object.defineProperty(Vue.prototype, '$bus', {
    get() {
        return this.$root.bus;
    }
});

const bus = new Vue();

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('main_nav', require('./components/frontend/nav.vue'));
Vue.component('modal', require('./components/frontend/modal.vue'));

const app = new Vue({
    el: '#app',
    router,
    data: {
        bus: bus // Here we bind our event bus to our $root Vue model.
    }
});
