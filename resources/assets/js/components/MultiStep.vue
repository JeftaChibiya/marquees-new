<script>
export default {
   data: function(){
		return {
            
            state: null, // this will be populated by StateHelper data		

            app: {
                error    : false
            },
            input: {
                email    : '',
                password : '',
                terms    : false
            }				
		}
	},

    created:function()
    {
        // create state machine
        this.fsm = StateMachine.create({

            transitions: [
                'next    : intro > material > dimensions > doors > confirm > form > finish',
                'back    : intro < material < dimensions < doors < confirm < form           < error',
                'error   :         form >           error',
                'restart : intro        < finish'
            ],

            handlers:
            {
                'form'      : this.onForm,
                'form@next' : this.onSubmit,
                'finish'    : this.onComplete
            }
        });

        // create and assign state helper object / data to application state
        this.state = StateHelper.object(this.fsm).data;
    },

    methods:
    {
	    // ui code
        doAction:function(event)
        {
            this.fsm.do(event.target.name);
        },

	    // application code
        onForm:function (event, fsm)
        {
            this.$validator.errorBag.clear();
        },

        onSubmit:function (event, fsm)
        {
            if(this.validate())
            {
                return this.submit();
            }
            fsm.cancel();
        },

        onComplete:function()
        {
            console.log('Yay! We submitted the form :)');
            this.reset();
        },

        validate:function()
        {
            this.$validator.validateAll();
            if (this.errors.any()) {
                console.log('The form is invalid');
                return false;
            }
            return true;
        },

        submit:function()
        {
            this.fsm.pause();
            console.log('Submitting data...');
            setTimeout(function ()
            {
                if(this.app.error)
                {
                    console.log('There was an error submitting your data!');
                    this.fsm.go('error', true);
                }
                else
                {
                    console.log('Data submitted!');
                    this.fsm.resume();
                }
            }.bind(this), 2000);
        },

        reset:function()
        {
            this.input.email = '';
            this.input.password = '';
            this.input.terms = false;
        }

	}	
}
</script>