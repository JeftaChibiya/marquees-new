@extends('layouts.builder')
@section('title', 'Tent Builder')
@section('content')

<builder inline-template>
    <div class="container">
        <div class="container-content">
            <div class="columns">
                <div class="column">
                    <p class="subtitle is-4">Sort by Tent Shape</p><br/>
                    <div class="notification is-white">
                        <div class="field" v-for="shape in shapes">
                          <div class="control">
                            <label class="checkbox">
                              <input type="checkbox" v-model="checkedShapes" :value="shape.id">
                              @{{ shape.name }}
                            </label>
                           </div>                      
                         </div>                                                
                    </div>
                    transformed into accordion on re-size
                </div>
                <div class="column is-9">
                  <div v-for="chunk in filterShapeImages">
                    <transition-group name="fade" tag="div" class="columns">
                      <div class="column is-4" v-for="shapeImage in chunk" :key="shapeImage.id">
                          <a :href="'/custom/'+shapeImage.shape_id">
                              <img :src="'/'+shapeImage.thumbnail_path" alt="">
                          </a>                        
                      </div>
                    </transition-group>                     
                  </div>
                </div>
            </div>            
        </div>
    </div>

    <!-- https://codepen.io/KenanYusuf/pen/PZKEKd -->
    
</builder>

@endsection