require('./bootstrap');

window.Vue = require('vue');

import  Buefy from 'buefy';
Vue.use(Buefy);

// var app = new Vue({
// 	el: '#app',
// 	data: {}
// });
// Vue.component('example', require('./components/Example.vue'));

$(document).ready(function(){
	$('button.dropdown').hover(function(e) {
		$(this).toggleClass('is-open');
	});
});