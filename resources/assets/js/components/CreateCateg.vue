<script>
export default {

	// form input for image upload
	// <input type="file" name="cover_image" accept="image/*" @change="onChange">

	data() {
		return {
	        form: new Form({
	          name: '',
	          brief_desc: ''        
	         })
		}
	},

	methods: {
		onSubmit() {		
		
			axios.post('/category/', {
				name: this.form.name, 
				brief_desc: this.form.brief_desc, 
				cover_image: this.getFile(),
			}).then(category => this.data === category,
					this.$router.push('categories')	          	
			);
		},	
		
		onChange(e) {
			
			if(! e.target.files.length) return;

			let file = e.target.files[0];

			// js API for reading the contents of a file
			new FileReader();
			// src of file
			reader.readAsDataURL(file);
			// once file is loaded,
			reader.onload = e => {
				// return the data url for the image
				this.avatar = e.target.result;
			};

			// see more on: 
			// https://laracasts.com/series/lets-build-a-forum-with-laravel/episodes/65

			// see what the target is
			// console.log(e.target)
		}			
	},
    mounted() {
      
      // console.log(this.attributes.id)

    }	
}	
</script>