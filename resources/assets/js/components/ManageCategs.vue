<script>
  
  import Category from '../models/Category';

  export default{
    data() {
      return {
        categories: [],
        form: new Form        
      }
    },
    created(){
      
        Category.all(categories => this.categories = categories);

    },
    filters: {
        capitalize: function (value) {
          if (!value) return ''
          value = value.toString()
          return value.charAt(0).toUpperCase() + value.slice(1)
        }
    },
    methods: {
	    addCategory(category) {

	        this.categories.push(category);

	    },   
	    destroy(category) {

	        this.form.delete('/category/' + category.id);

	        this.categories.splice(this.categories.indexOf(category), 1); // using splice also applies the transition     
	     }    	
    }
  }
</script>

<!-- CSS for transitions and things -->
<style>
    .fade-enter-active, .fade-leave-active {
      transition: opacity .2s
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active in <2.1.8 */ {
      opacity: 0
    }  
</style>