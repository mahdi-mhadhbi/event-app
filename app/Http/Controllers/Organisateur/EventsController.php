<?php

namespace App\Http\Controllers\Organisateur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Event ;
use App\Models\Historique ;
use Illuminate\Support\Facades\Auth;
class EventsController extends Controller
{
    public function dashboard(){
        
        return view('Organiseur.dashboard');
    }
    public function indexEvents(){
        $data = Event::all();
        return view('Organiseur.events.index',compact('data'));
    }
    public function myEvents(){
        $id = Auth::user()->id ;
        $data = Event::where('organizer_id',$id)->get();
       // dd($data);
        return view('Organiseur.events.eventsCurrentOrganisateur',compact('data'));
    }
    public function create(){
        
        return view('Organiseur.events.create');
    }
    public function store(Request $request){
       // dd($request->all());
       $imagePath = $request->file('image')->store('images/events', 'public');
        try {
            DB::table('events')->insert([
                'title' => $request->title,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'price' => $request->price,
                'description' => $request->description,
                'organizer_id' => Auth()->user()->id,
                'location' => $request->location,
                'image' => $imagePath,
                // ...
            ]);
            return redirect()->route('Organiseur.events.index  ')->with([
                'message' => 'success created !',
                'alert-type' => 'success'
            ]);
        }catch (\Exception $e) {
            //Log::error('Error while saving booking: ' . $e->getMessage());
            // Handle exceptions here, such as logging them or providing user feedback.
            return redirect()->back()->with('error', 'An error occurred while saving the booking.');
        }
    }
    public function edit($id)
    {
        $event = Event::find($id);

        return view('Organiseur.events.edit',compact('event'));
    }
    public function update(Request $request, $id)
    {
        $event = Event::find($id);
    
        // Validate and update the event data
       
    
        // Update other fields
        $event->title = $request->title;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->price = $request->price;
        $event->description = $request->description;
        $event->location = $request->location;
        // Handle image upload only if a new file is provided
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->storeAs('images', $imageName, 'public');
            $event->image = 'images/'.$imageName;
        }
    
        $event->save();
    
        return back()->with([
            'message' => 'Event updated successfully!',
            'alert-type' => 'success'
        ]);
    }
   // app/Http/Controllers/EventsController.php

public function destroy($id)
{
    // Check if the 'delete' query parameter is present
    if (request()->has('delete')) {
        // Find the event by ID and delete it
        $event = Event::find($id);

        if ($event) {
            $event->delete();
            return back()->with([
                'message' => 'Event deleted successfully!',
                'alert-type' => 'danger'
            ]);
        } else {
            return back()->with([
                'message' => 'Event not found!',
                'alert-type' => 'danger'
            ]);
        }
    } else {
        return back()->with([
            'message' => 'Delete action not confirmed!',
            'alert-type' => 'warning'
        ]);
    }
}
    public function archive(){
        $id = Auth::user()->id ;
        $data = Historique::where('organizer_id',$id)->get();
       // dd($data);
        return view('Organiseur.events.historique',compact('data'));
    }

    
    


}
