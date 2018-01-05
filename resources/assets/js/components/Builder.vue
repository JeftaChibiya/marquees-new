<script>
	import Shape from '../models/Shape';
	import ShapeImage from '../models/ShapeImage';
	export default {
		data(){
		  return {
		  	checkedShapes: [],
		  	shapes: [],
		  	shapeImages: []
		  }
		},
		created(){
	        Shape.all(shapes => this.shapes = shapes);	
	        ShapeImage.all(shapeImages => this.shapeImages = shapeImages);	
		},

		computed: {
			filterShapeImages: function(){
				if(this.checkedShapes.length){
					return _.chunk(this.shapeImages.filter(shapeImage => this.checkedShapes.includes(shapeImage.shape_id)), 3)
				}  
				else{
					return _.chunk(this.shapeImages, 3)
				}             				
			}
		}
	}
</script>

<!-- below are solutions for using values from checkboxes -->
<!-- https://stackoverflow.com/questions/43925816/checkbox-filtering-with-vuejs -->
<!-- https://jsbin.com/jofediqifi/1/edit?html,js,output -->

<style>
    .fade-enter-active, .fade-leave-active {
      transition: opacity .2s
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active in <2.1.8 */ {
      opacity: 0
    }  	
</style>