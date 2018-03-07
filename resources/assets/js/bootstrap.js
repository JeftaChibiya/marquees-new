import VeeValidate from 'vee-validate';
import VueRouter from 'vue-router';
import Form from './utilities/Form';
import Errors from './utilities/Errors';
import Slideout from 'slideout';
import Slick from 'slick-carousel';

window.Form = Form;
window.Errors = Errors;
window.Slick = Slick;
window.Slideout = Slideout;
window.animsition = require('animsition');
window.Vue = require('vue');
window.moment = require('moment');


try {
    window.$ = window.jQuery = require('jquery');

    // require('bootstrap');

} catch (e) {}



// default import
// import StateMachine from 'state-machine';



window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

window.token;

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}


/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });
// 


Vue.use(VeeValidate);
Vue.use(VueRouter);

window.StateMachine = require('state-machine').StateMachine;

// helper
window.StateHelper = require('state-machine').StateHelper;