<script>
 
 import User from '../models/User';

 export default{
    
    data() {
      return {
          users: []     
      }
    },  
    created(){
      
        User.all(users => this.users = users);

    },
    filters: {
        capitalize: function (value) {
          if (!value) return ''
          value = value.toString()
          return value.charAt(0).toUpperCase() + value.slice(1)
        }
    },
    methods: {
	    destroy(user) {

	        this.form.delete('/user/' + user.id);
	        this.users.splice(this.users.indexOf(user), 1); // using splice also applies the transition     
	     }  	         	
    }
  }	
</script>