require('./bootstrap');

window.Vue = require('vue');
window.emojiSupport = require('detect-emoji-support');

import twemoji from 'twemoji'
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
        spotDetailModalOpen: false,
    },
    methods: {
        toggleMobileMenu: function() {
            this.mobileMenuOpen = !this.mobileMenuOpen;
        },
        toggleSpotModal: function () {
            this.spotDetailModalOpen = !this.spotDetailModalOpen;
        }
    }
});

/* If browser doesn't support emojis, replace them with images */
if (!emojiSupport()) {
    twemoji.parse(document.body);
}