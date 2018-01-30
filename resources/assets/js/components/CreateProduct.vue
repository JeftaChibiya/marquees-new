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
	          span: '',          
	          length: '',
	          category: ''
	        })
		}
	},
    created(){
      
        Category.all(categories => this.categories = categories);

        // this.csrfHeader = {
        // 	'X-CSRF-TOKEN': window.Marquees.csrfToken
        // }        

    },
	methods: {
		onSubmit() {
	        this.form
	          .post('/products')
	          .then(
	          	product => this.data === product,
				this.$router.push('catalog')	
	         );
		}
	},
    mounted() {
      
      // console.log(this.attributes.id)

    }	
}	
</script>