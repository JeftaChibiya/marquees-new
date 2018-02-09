@extends('layouts.admin')
@section('title', 'Create Attribute')

@section('content')

    <create-attribute inline-template>
        <div>
            <div class="container">
                <div class="level">
                    <div class="level-left">
                        <div class="level-item">
                            <a href="/manage-attributes">
                                <span class="icon">
                                <i class="fa fa-angle-double-left"></i>
                                </span> <span>Back</span>
                            </a>						
                        </div>
                    </div>
                </div>
            </div>

            <!-- page title -->
            <div class="original notice">
            <div class="container">
                <div class="columns">
                    <div class="column is-4 is-offset-4">
                    <p class="title is-3 white"><b>Add Attribute</b></p>		  			
                    </div>
                </div>
            </div>
            </div>

            <div class="container">
                <div class="columns">		
                    <div class="column is-4 is-offset-4">			
                        <form method="POST" @submit.prevent="onSubmit" @keydown="form.errors.clear()">

                            <div class="field is-grouped">
                                <div class="field-body">
                                <div class="field">
                                    <label>Span:</label>
                                    <input type="text" class="input" v-model="form.span">
                                </div>
                                <div class="field">
                                    <label>Length:</label>
                                    <input type="text" class="input" v-model="form.length">
                                </div>							
                                </div>
                            </div>	

                            <div class="field">
                                <button class="button is-light" :disabled="form.errors.any()">
                                    CREATE
                                </button>
                            </div>											
                        </form>

                    </div>
                </div>		
            </div>	
        </div>    
    </create-template>

@endsection