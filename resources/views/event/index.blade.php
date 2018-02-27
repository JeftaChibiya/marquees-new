@extends('layouts.admin')
@section('title', 'Catalog')

@section('content')

<div>
    <div class="original notice">
        <div class="container">
            <p class="title is-3 white"><b>Real Events</b></p>
        </div>
    </div>

    <div class="container">
        <div class="level">
            <div class="level-left">
                <div class="level-item">
                    <a href="/event.create" class="button">
                        <span class="icon">
                        <i class="fa fa-plus-circle"></i>
                        </span> <span>New Event</span>
                    </a>						
                </div>
            </div>
        </div>				

    <div class="columns">		
        <div class="column is-10">
            <table class="table is-bordered">
            <!-- header -->
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Category</th>	  				      
                    <th>Actions</th>				      
                </tr>
            </thead>	

            <!-- body -->
            <tbody>
                @foreach($events as $event)
                    <tr>
                        <td>{{ $event->id }}</td>
                        <td>{{ $event->title }}</td>                       
                        <td>{{ $event->desc }}</td>                      
                        @foreach($event->categories as $category)
                            <td> {{ $category->name }} </td>	
                        @endforeach
                        <td>
                            <div class="dropdown is-hoverable">
                            <div class="dropdown-trigger">
                                <span class="icon" aria-haspopup="true" aria-controls="dropdown-menu4">
                                    <i class="fa fa-ellipsis-v"></i>
                                </span>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                                <div class="dropdown-content">                                    
                                    <a href="/event/{{ $event->id }}/edit" class="dropdown-item">
                                        Edit
                                    </a>		
                                <hr class="dropdown-divider">								
                                    <a href="" class="dropdown-item">
                                        View
                                    </a>											    					      
                                <hr class="dropdown-divider">
                                    <a class="dropdown-item">
                                        Delete
                                    </a>            
                                </div>
                            </div>
                            </div>				      	
                        </td>				      			      				      			      
                    </tr>
                @endforeach
            </tbody>
            </table>				
        </div>
    </div>    
  </div>	 
</div>

@endsection