@extends('layouts.admin')

@section('content')

<div>
    <div class="container">
        <div class="level">
            <div class="level-left">
                <div class="level-item">
                    <a href="/manage-categories">
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
            <p class="title is-3 white"><b>Create Event</b></p>		  			
            </div>
        </div>
    </div>
    </div>

    <div class="container">
        <div class="columns">		
            <div class="column is-4 is-offset-4">							
                <form action="/event" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <!-- title -->
                    <div class="field">
                        <label>Title:</label>
                        <input type="text" class="input" name="title" placeholder="name">
                    </div>
                    <!-- category -->
                    <div class="field">
                        <label>Category:</label> <br/>
                        <select name="category_id" class="select">
                                <option>Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>                    				
                    <div class="field">
                        <label>Brief Description:</label>
                        <textarea type="textarea" class="textarea" name="desc" placeholder="description"></textarea>
                    </div>		
					
                    <div class="field">
                        <label>Cover Image:</label><br/>
                        <input type="file" name="cover_image">
                    </div>								
                    <div class="field">
                        <button class="button is-light" type="submit">
                            CREATE
                        </button>
                    </div>											
                </form>
            </div>
        </div>		
    </div>	
</div>    

@endsection