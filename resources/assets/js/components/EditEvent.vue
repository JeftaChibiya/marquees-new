<script>
import Dropzone from 'vue2-dropzone';

export default {

    components: { Dropzone },

    props: ['event', 'categories'],

	data() {
		return {
			showUpload: false,
            csrfHeader: null,
            // cover: false
		}
	},	
    created(){
    	// load all event attributes
		axios.get('/event/'+this.event.id)
			.then(response => {
				this.event = response.data;
			});		

            // load the csrf token from the head
            this.csrfHeader = {'X-CSRF-TOKEN': window.Marquees.csrfToken}

    }, 
    // computed: {
    //     cover: function() {
    //         self.$el === document.getElementById('cover_el')            
	//    		axios.patch('image/'+ self.$el.coverid, {
	//    			cover: this.cover === 1,
	// 			cover: this.cover === 0	   			
	//    		})            
    //     }
    // },  
	methods: {

	   onSubmit() {
	        axios.patch('/event/' + this.event.id, {
	        	 title: this.event.title, 
	        	 desc: this.event.desc, 
	        	 length: this.event.length
	        });
		},	

	   makeCover(image){
	   		axios.patch('/image/'+ image.id, {
	   			cover: this.cover === 1,
				cover: this.cover === 0	   			
	   		})
	   },

       showSuccess: function(file) {
        
         console.log('A file was successfully uploaded')

       }		
     },
     
     mounted() {


     }	
 //    // setting parameters before route edit / view is issued
	// beforeRouteEnter (to, from, next) {
	//   Product.find(to.params.id, (product) => {
	//     next(this.data)
	//    })
	// },
	// // setting parameters before route edit / view is updated
	// beforeRouteUpdate (to, from, next) {
	//    Product.find(to.params.id, (product) => {
	//      this.data
	//      next()
	//    })
	// },     
}	
</script>

<style>

    .img-container{
        position: relative;
        width: 100%;
    }

    .image {
    opacity: 1;
    display: block;
    width: 100%;
    height: auto;
    transition: .5s ease;
    backface-visibility: hidden;
    }

    .overlay {
    transition: .5s ease;
    opacity: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    /*background: rgba(0,0,0,0.85);*/
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%)
    }

    .img-container:hover .image {
    opacity: 0.3;
    }

    .img-container:hover .overlay {
    opacity: 1;
    }

    .textual-content {
    background-color: #4CAF50;
    color: white;
    font-size: 14px;
    padding: 8px 16px;
    }
	
</style>