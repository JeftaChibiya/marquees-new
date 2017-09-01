<template>
    <div id="slider">
      <slider animation="fade" :control-btn="false" :indicators="false" :interval="4500" height="460px" :auto="true">
        
          <slider-item v-for="(i, index) in set" :key="index" :on-click="test">
            
            <div :style="i">
              <p style="line-height: 280px; font-size: 5rem; text-align: center;">ITM Marquees</p>
            </div>

          </slider-item>

      </slider>
    </div>
</template>

<!-- https://jsfiddle.net/su9zv0w9/69/ -->
<!-- https://github.com/shhdgit/vue-easy-slider -->
<script>
    
    import { Slider, SliderItem } from 'vue-easy-slider';

    export default {
      components: {
        Slider,
        SliderItem
      },      
       data () {
         return {
          set: []
        }        
       },
      methods: {
            test () {console.log(1)}
      },
      mounted () {
        setTimeout(() => {
          this.set = [
            { backgroundImage: "url('../images/party_tent.jpg')", 
              backgroundRepeat: 'no-repeat', backgroundSize: 'cover', height: '100%', backgroundPosition: 'center center' },
            { backgroundImage: "url('../images/gazebos.jpg')", 
              backgroundRepeat: 'no-repeat', backgroundSize: 'cover', height: '100%',
              backgroundPosition: 'center center' },
            { backgroundImage: "url('../images/blueprint.jpg')", 
              backgroundRepeat: 'no-repeat', backgroundSize: 'cover', height: '100%',
              backgroundPosition: 'center center'  },
          ]
        }, 1000)
       }
    }
</script>
