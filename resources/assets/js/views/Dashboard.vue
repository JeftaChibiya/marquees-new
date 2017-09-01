<template>
	<div>
		<div class="container">
		<div class="tile is-ancestor">
		  <div class="tile is-vertical">
		    <div class="tile">
		      <div class="tile is-parent is-vertical">
		        <article class="tile is-child notification is-light">
		          <p class="title"><b>Products</b></p>
		          <p class="subtitle">Manage images and appearance of products</p>
		        </article>
		        <article class="tile is-child notification is-light">
		          <p class="title"><b>Order Management</b></p>
		          <p class="subtitle">View requests for non-binding offers & customised products</p>
		        </article>
		      </div>
		      <div class="tile is-parent">
		        <article class="tile is-child notification original">
		          <p class="title"><b>Settings</b></p>
		          <p class="subtitle">Add, View Authorised users</p>
<!-- 		          <figure class="image is-4by3">
		            <img src="http://bulma.io/images/placeholders/640x480.png">
		          </figure> -->
		        </article>
		      </div>
		    </div>   <!-- .title -->

		    <div class="tile is-parent">
		      <article class="tile is-child notification is-dark">
		        <p class="title">Website performance</p>
		        <div class="content">
				<div class="level">
				  <div class="level-item has-text-centered">
				    <div>
				      <p class="heading">avg Visits / week</p>
				      <p class="title">-</p>
				    </div>
				  </div>
				  <div class="level-item has-text-centered">
				    <div>
				      <p class="heading">Non-binding requests / week</p>
				      <p class="title">-</p>
				    </div>
				  </div>
				  <div class="level-item has-text-centered">
				    <div>
				      <p class="heading">Contacts</p>
				      <p class="title">-</p>
				    </div>
				  </div>
				</div>
		        </div>
		      </article>
		    </div>
		  </div>
		</div>				
		</div>
	</div>
</template>

<script>
 
 import Product from '../models/Product';

 export default{
    data() {
      return {
        products: [],
        form: new Form        
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