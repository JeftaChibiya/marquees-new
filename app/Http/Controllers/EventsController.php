<?php

namespace App\Http\Controllers;


use Storage;
use App\Event;
use App\Category;
use Illuminate\Http\Request;


class EventsController extends Controller
{

    public function all()
    {
        
        return view('event.all');

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::with(['categories'])->get();
        
        return view('event.index', compact('events'));

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();

        return view('event.create', compact('categories'));
        
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

		$event = new Event;
        $event->title = $request->input('title');        
		$event->desc = $request->input('desc');
		
		if($request->hasFile('cover_image'))
		{
			$cover_image = $request->file('cover_image');

			// name = current time + original file name
			$filename = time() . '_' . $cover_image->getClientOriginalname();
			// save file in database as just the original file name 
			$event->cover_image = $filename;

			// save, store file
			$newCoverPath = $cover_image->storeAs('/events/cover_images', $filename, 'dropbox');			
			
        }
        
        $event->save();

        $category = Category::find($request->input('category_id'));

        $event->categories()->attach($category);          
          
		return redirect()->route('event.manage', [$event]);        
        
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        //

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $event = Event::with(['categories'])->find($id);

        return view('event.edit', compact('event', 'categories'));

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {

         $event = Event::find($id);

         $event->fill($request->except('cover_image'));                     
 
         if($request->hasFile('cover_image'))
         {
             $cover_image = $request->file('cover_image');
             // name = time + original file name
             $filename = time() . '_' . $cover_image->getClientOriginalName();
             // store in this folder
             $cover_image->storeAs('/events/cover_images', $filename, 'dropbox');
             // get old file 
             $oldCoverImg = $event->cover_image;
             
             $event->cover_image = $filename;
 
             // delete the old file from the disk
             Storage::delete($oldCoverImg);
         }
         
         $event->save();
 
         return back();         

    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
