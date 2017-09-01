<script>
	export default {
		// props object for validation
		props: {
			product: {
				type: Object
			},
			attributes:{
				type: Array
			},
            span: {
                type: Number,
                default() { 
                    return 6 
                }
            },
            length: {
                type: Number,
                default() { 
                    return 3
                }
            }			           
        },

		data: function(){
			return {
				tax: 20,
				price: 500,
				selected: '',
				showModal: false 				
			}
		},

		computed: {

			subtotal: function () {
		      	 
		      	 return ((this.price ) * this.span * this.length * (this.tax / 100)).toFixed(2);

		    }				
		}


	}
</script>