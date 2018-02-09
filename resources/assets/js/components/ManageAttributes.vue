<script>

 export default{

    props: ['attributes'],

    data() {
      return {
        form: new Form        
      }
    },    
    filters: {
        capitalize: function (value) {
          if (!value) return ''
          value = value.toString()
          return value.charAt(0).toUpperCase() + value.slice(1)
        }
    },
    methods: {
	    addProduct(attribute) {

	        this.attributes.push(attribute);

	    },   
	    destroy(attribute) {

	        this.form.delete('/attribute/' + attribute.id);

	        this.attributes.splice(this.attributes.indexOf(attribute), 1); // using splice also applies the transition     
	     },
		setData(attribute) {
	        
	        this.attribute = attribute

	    }	         	
    }
  }	
</script>