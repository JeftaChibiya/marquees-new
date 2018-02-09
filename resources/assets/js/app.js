/**
 * Load all of this project's JavaScript dependencies which, including Vue and other libraries
 */
require('./bootstrap');


// import router from './routes';

/**
 *  Vue application components
 */

Vue.component('imgSlider', require('./components/ImageSlider.vue'));

Vue.component('productShow', require('./components/ProductShow.vue'));

// Vue.component('multi-step', require('./components/MultiStep.vue'));

Vue.component('modal', require('./components/Modal.vue'));
Vue.component('builder', require('./components/Builder.vue'));
Vue.component('tabs', require('./components/Tabs.vue'));
Vue.component('tab', require('./components/Tab.vue'));

Vue.component('manage-catalog', require('./components/Catalog.vue'));
Vue.component('manage-categs', require('./components/ManageCategs.vue'));
Vue.component('manage-users', require('./components/ManageUsers.vue'));

Vue.component('create-product', require('./components/CreateProduct.vue'));
Vue.component('create-categ', require('./components/CreateCateg.vue'));
Vue.component('edit-categ', require('./components/EditCateg.vue'));
Vue.component('edit-product', require('./components/EditProduct.vue'));
Vue.component('view-categ', require('./components/ViewCateg.vue'));
Vue.component('create-user', require('./components/CreateUser.vue'));
Vue.component('manage-attributes', require('./components/ManageAttributes.vue'));
Vue.component('create-attribute', require('./components/CreateAttribute.vue'));
// Vue.component('create-users', require('./components/CreateUser.vue'));


/**
 *  A Vue application instance 
 */
new Vue({

    el: '#app',

    // router,

    data: {
        showModal: false
    }

});

$(document).ready(function() {
    $(".animsition").animsition({
        inClass: 'fade-in',
        outClass: 'fade-out',
        inDuration: 1500,
        outDuration: 800,
        linkElement: '.animsition-link',
        // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
        loading: true,
        loadingParentElement: 'body', //animsition wrapper element
        loadingClass: 'animsition-loading',
        loadingInner: '', // e.g '<img src="loading.svg" />'
        timeout: false,
        timeoutCountdown: 5000,
        onLoadEvent: true,
        browser: ['animation-duration', '-webkit-animation-duration'],
        // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
        // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
        overlay: false,
        overlayClass: 'animsition-overlay-slide',
        overlayParentElement: 'body',
        transition: function(url) { window.location.href = url; }
    });
});


/*=================================
  =  Accordion - Hamburger menu    =
=================================*/
(function($) {
    $('.accordion > li:eq(0) a').addClass('active').next().slideDown();

    $('.accordion a').click(function(j) {
        var dropDown = $(this).closest('li').find('.content');

        $(this).closest('.accordion').find('.content').not(dropDown).slideUp();

        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).closest('.accordion').find('a.active').removeClass('active');
            $(this).addClass('active');
        }

        dropDown.stop(false, true).slideToggle();

        j.preventDefault();
    });
})(jQuery);

// https://codepen.io/MightyShaban/pen/LqrCK

/*=====  End ======*/