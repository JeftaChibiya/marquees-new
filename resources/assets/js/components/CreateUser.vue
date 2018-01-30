<script>

import Category from '../models/Category';
import Dropzone from 'vue2-dropzone';

export default {

	components: { Dropzone },

	data() {
		return {
			categories: [],
			showUpload: false,
			csrfHeader: null,						
	        form: new Form({
	          name: '',
	          email: '',          
	          password: ''
	        })
		}
	},
	methods: {
		onSubmit(context) {
	        axios.post('/register-user',
	        	{
	        		name: this.form.name,
	        		email: this.form.email, 
	        		password: this.form.password
	        	}).then(response => {
	        		if(response.status == 200){
	        			context.response = response.data.message
			        	this.$router.push('manage-users')	        			
	        		}	
	        	}, response => {
	        	 	context.response = response.data
	        	 	context.error = true
	        	 }
	         )
		}
	}	
}	
</script>