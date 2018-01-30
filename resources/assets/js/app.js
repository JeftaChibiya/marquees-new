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
Vue.component('view-categ', require('./components/ViewCateg.vue'));
Vue.component('create-user', require('./components/CreateUser.vue'));

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