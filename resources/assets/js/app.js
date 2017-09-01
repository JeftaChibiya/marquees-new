
/**
 * Load all of this project's JavaScript dependencies which, including Vue and other libraries
 */
require('./bootstrap');


import router from './routes';

/**
 *  Vue application components
 */

Vue.component('imgSlider', require('./components/ImageSlider.vue'));

Vue.component('productShow', require('./components/ProductShow.vue'));

Vue.component('multi-step', require('./components/MultiStep.vue'));

Vue.component('modal', require('./components/Modal.vue'));

/**
 *  A Vue application instance 
 */
new Vue({
   
    el: '#app',
        
  	router,

    data: {
      showModal: false
    }            

});


/*===================================
=            Switch USPs            =
===================================*/

/*=====  End of Switch USPs  ======*/


/*=============================================
  =  Listening for media query changes - quick-info / USPs on homepage =
=============================================*/

 /* JavaScript Media Queries */

var this_usp = document.getElementById("current_usp");

if (window.matchMedia("(min-width: 720px)").matches) {   
  // what happens
} 


// WidthChange(mq);

/*=====  End  ======*/
  

/*=================================
  =  Accordion - Hamburger menu    =
=================================*/
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
      acc[i].onclick = function(){
          /* Toggle between adding and removing the "active" class,
          to highlight the button that controls the panel */
          this.classList.toggle("active");

          /* Toggle between hiding and showing the active panel */
          var panel = this.nextElementSibling;
          if (panel.style.maxHeight){
            panel.style.maxHeight = null;
          } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
          }
      }
  }    
/*=====  End ======*/


/*=============================================
=            Hamburger menu toggling          =
=============================================*/

  // navbar hamburger menu toggling 
  document.addEventListener('DOMContentLoaded', function () {

    // Get all "navbar-burger" elements
    var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

    // Check if there are any nav burgers
    if ($navbarBurgers.length > 0) {

      // Add a click event on each of them
      $navbarBurgers.forEach(function ($el) {
        $el.addEventListener('click', function () {

          // Get the target from the "data-target" attribute
          var target = $el.dataset.target;
          var $target = document.getElementById(target);

          // Toggle the class on both the "navbar-burger" and the "navbar-menu"
          $el.classList.toggle('is-active');
          $target.classList.toggle('is-active');

        });
      });
    }

  });  

/*=====  End of Section comment block  ======*/
  

/*================================================
=            Slide out menu - backend            =
================================================*/
  // Toggle button
  document.querySelector('.toggle-button').addEventListener('click', function() {
      slideout.toggle();
  });

  function close(event) {
    event.preventDefault();
    slideout.close();
  }  

  // slideout panel - admin
  var slideout = new Slideout({
      'panel': document.getElementById('panel'),
      'menu': document.getElementById('menu'),
      'padding': 230,
      'tolerance': 70
  });

  slideout
    .on('beforeopen', function() {
      this.panel.classList.add('panel-open');
    })
    .on('open', function() {
      this.panel.addEventListener('click', close);
    })
    .on('beforeclose', function() {
      this.panel.classList.remove('panel-open');
      this.panel.removeEventListener('click', close);
  });
/*=====  End  ======*/