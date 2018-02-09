<script>

// import Category from '../models/Category';
// import Product from '../models/Product';
// import Attribute from '../models/Attribute';

export default {

	data() {
		return {
			categories: [],
			product: [],
			loading: false,
			attributes: []
		}
	},
    created(){

		axios.get('/product/'+this.product.id)
			.then(response => {
				this.product = response.data
			});			

        // Category.all(categories => this.categories = categories);

        // Attribute.all(attributes => this.attributes = attributes);        

    },  
	methods: {
		onSubmit() {
	        this.form
	          .post('/product')
	          .then(
	          	product => this.data === product,
				this.$router.push('catalog')	
	         );
		}	
    }
  }	
</script>

<style>
    .fade-enter-active, .fade-leave-active {
      transition: opacity .2s
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active in <2.1.8 */ {
      opacity: 0
    }  	
</style>