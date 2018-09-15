require('./bootstrap');

window.Vue = require('vue');

import twemoji from 'twemoji'
window.twemoji = require('twemoji');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import * as VueGoogleMaps from 'vue2-google-maps';

Vue.use(VueGoogleMaps, {
    load: {
        key: process.env.MIX_GOOGLE_MAPS_API_KEY,
}
});

Vue.component('google-map', require('./components/GoogleMap.vue'));

const app = new Vue({
    el: '#app',
    data: {
        mobileMenuOpen: false,
    },
    methods: {
        toggleMobileMenu: function(){
            this.mobileMenuOpen = !this.mobileMenuOpen;
        },
        closeMobileMenu: function(){
            if(this.mobileMenuOpen){
                window.scrollTo(0,0);
                this.mobileMenuOpen = false;
            }
        },
    }
});

twemoji.parse(document.body);