<template>
  <div class="container-content">
    <div class="columns">
        <div class="column"></div>
          <div class="column is-8">
            <fieldset :disabled="state.paused" class="steps">
                <section id="steps">
                    {{-- intro --}}
                    <article id="intro" v-show="state.is.intro">
                        <div class="content">
                            <p class="subtitle is-3 has-text-centered">Tent Types Overview</p>
                             <div class="columns">
                                 <div class="column has-text-centered">
                                     Party
                                 </div>
                                 <div class="column">
                                     Warehouse
                                 </div>
                                 <div class="column">
                                     Gazebos & Pagobas
                                 </div>
                                 <div class="column">
                                     Accessories
                                 </div>                                 
                             </div>
                            <p class="subtitle is-6 has-text-centered">Click "next" to get started</p>                                
                        </div>
                    </article> 
                    {{-- material type --}}
                    <article id="material" v-show="state.is.material">
                        <div class="content">
                            <p class="subtitle is-3 has-text-centered">Select Material</p>
                             <div class="columns">
                                 <div class="column has-text-centered">
                                     PVC
                                 </div>
                                 <div class="column">
                                     <p class="disabled">Polyester</p>
                                 </div>
                                 <div class="column">
                                     <p>Polycotton</p>
                                 </div>
                                 <div class="column">
                                     <p>Nylon</p>
                                 </div>                                 
                             </div>
                            <p class="subtitle is-6 has-text-centered">Click "next" to get started</p>                                
                        </div>
                    </article> 
                    {{-- dimensions type --}}
                    <article id="dimensions" v-show="state.is.dimensions">
                        <div class="content">
                            <p class="subtitle is-3 has-text-centered">Dimensions</p>
                             <div class="columns">
                                 <div class="column has-text-centered">
                                     6m X 3m 
                                 </div>
                                 <div class="column">
                                     9m x 3m 
                                 </div>
                                 <div class="column">
                                    6m x 5m
                                 </div>
                                 <div class="column">
                                     <p>Create Custom</p>
                                 </div>                                 
                             </div>
                            <p class="subtitle is-6 has-text-centered">Click "next" to get started</p>                                
                        </div>
                    </article> 
                    {{-- doors type --}}
                    <article id="doors" v-show="state.is.doors">
                        <div class="content">
                            <p class="subtitle is-3 has-text-centered">Select Doors Types</p>
                             <div class="columns">
                                 <div class="column has-text-centered">
                                     Door 1
                                 </div>
                                 <div class="column">
                                     <p class="disabled">Door 2</p>
                                 </div>
                                 <div class="column">
                                     <p>5 Meter Sliding Door</p>
                                 </div>
                                 <div class="column">
                                     <p>5 Meter Door Side Panels</p>
                                 </div>                                 
                             </div>
                            <p class="subtitle is-6 has-text-centered">Click "next" to get started</p>                                
                        </div>
                    </article> 
                    {{-- doors type --}}
                    <article id="confirm-custom" v-show="state.is.confirm">
                        <div class="content">
                            <p class="subtitle is-3 has-text-centered">Select Doors Types</p>
                             <div class="columns">
                                 <div class="column">
                                     <ul>
                                         <li>Tent Type: Party Tent</li>
                                         <li>Material: Polycotton</li>
                                         <li>Dimensions: 6m x 3m </li>
                                         <li>Doors: Door 1</li>
                                     </ul>

                                 </div>                                 
                             </div>
                             <div class="has-text-centered">
                                <button class="button original">REQUEST NON-BINDING OFFER</button>
                             </div>                                
                        </div>
                    </article>                                                                                
                    {{-- form --}}
                    <article id="form" v-show="state.is.form">  
                        <div class="columns">
                            <div class="column is-6 is-offset-3">
                                <p class="subtitle is-3">Non-binding Request</p>                            
                                <form>
                                    
                                    <div v-show="state.paused" class="alert">
                                        Communicating with server...
                                    </div>

                                    <div class="field">
                                        <label for="email">Email</label>                                    
                                        <input id="email" type="email" name="email" placeholder="Email" 
                                               autocomplete="off"
                                               class="input" data-rules="required|email" v-model="input.email" v-validate>

                                    </div>

                                    <div class="field">
                                        <label for="password">Password</label>                                        
                                        <input id="password"
                                               name="password"
                                               type="password"
                                               placeholder="Password"
                                               autocomplete="off"
                                               class="input"
                                               data-rules="required|min:6"
                                               v-model="input.password"
                                               v-validate>
                                    </div>

                                    <div class="checkbox">
                                        <label class="checkbox">
                                            <input id="terms"
                                            name="terms"
                                            type="checkbox"
                                            value="1"
                                            data-rules="required"
                                            v-model="input.terms"
                                            v-validate
                                            >
                                            Agree terms and conditions
                                        </label>
                                        <span class="help-block">You must agree to continue</span>
                                    </div>

                                    <div class="checkbox">
                                        <label class="checkbox">
                                            <input type="checkbox" v-model="app.error">
                                                Simulate submission error
                                        </label>
                                    </div>                                    
                                </form>                                
                            </div>
                        </div>
                    </article>

                    <article id="finish" v-show="state.is.finish">
                        <h2>Thank you!</h2>
                        <p>Your membership information has been emailed to you</p>
                    </article>

                    <article id="error" v-show="state.is.error">
                        <h2 style="color:red">Sorry</h2>
                        <p>There was a problem saving your details to the server</p>
                    </article>                            
                </section>

            <section id="controls">
                <button v-on:click="doAction" :disabled="!state.actions.back" class="button is-light" name="back">
                    Back
                </button>
                <button v-on:click="doAction" :disabled="!state.actions.next" class="button is-light " name="next">
                    Next
                </button>
                <button v-on:click="doAction" :disabled="!state.actions.restart" class="button is-light " name="restart">   Restart
                </button>
            </section>   

        </fieldset>
    </div>

        <div class="column"></div>        
    </div>         
</div>          
</template>

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