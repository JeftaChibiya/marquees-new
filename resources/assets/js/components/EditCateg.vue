<script>

// import Category from '../models/Category';

export default {

	props: {
		category: {
			type: Object
		}
	},

	data() {
		return {
		}
	},
	created(){

		// axios.get('/category/'+this.$route.params.id)
		// 	.then(response => {
		// 		this.category = response.data;
		// 	})				
	},
	methods: {
		// onSubmit() {
	    //     this.form
	    //       .post('/category')        
	    //       .then(category => this.data === category,

		// 		this.$router.push('categories')	          	
	    //      ); 

		// }
	},
    mounted() {
      
      // console.log(this.attributes.id)

    }	
}	
</script>