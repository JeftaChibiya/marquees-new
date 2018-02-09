<script>
	export default {

		data() {
			return {
		        form: new Form({
		          span: '',
		          length: '',          
		         })
			}
		},

		methods: {
			onSubmit() {
		        this.form
		          .post('/attribute')        
		          .then(attribute => this.data === attribute,

					this.$router.push('manage-attributes')	          	
		         ); 

			}
		}	
	}	
</script>