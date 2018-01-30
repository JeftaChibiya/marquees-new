 <script>
 
 import Product from '../models/Product';
 import Modal from '../components/Modal';

 export default{
 	components: {Modal},
    
    data() {
      return {
        products: [],
        form: new Form,
        showModal: false,
        flipMe: false                  
      }
    },  
    created(){
      
        Product.all(products => this.products = products);

    },
    filters: {
        capitalize: function (value) {
          if (!value) return ''
          value = value.toString()
          return value.charAt(0).toUpperCase() + value.slice(1)
        }
    },
    methods: {
	    toggleModal: function() {
	        this.showModal = !this.showModal
	    },
	    flipModal: function() {
	        this.flipMe = !this.flipMe
	    },    	
	    addProduct(product) {

	        this.products.push(product);

	    },   
	    destroy(product) {

	        this.form.delete('/product/' + product.id);

	        this.products.splice(this.products.indexOf(product), 1); // using splice also applies the transition     
	     },
		setData(product) {
	        
	        this.product = product

	    }	         	
    }
  }	
</script>