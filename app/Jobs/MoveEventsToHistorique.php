<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Historique;
use App\Models\Event;

class MoveEventsToHistorique implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $endedEvents = Event::where('end_date', '<', now())->get();
       // dd($endedEvents);
       // Move each ended event to the historical section
       try {
            foreach ($endedEvents as $event) {
                $historique = new Historique;
                $historique->title = $event->title;
                $historique->start_date = $event->start_date;
                $historique->end_date = $event->end_date;
                $historique->price = $event->price;
                $historique->description = $event->description;
                $historique->organizer_id = $event->organizer_id;
                $historique->location = $event->location; // Set the location field
                $historique->image = $event->image;
            
                $historique->save();
            
                    // Optionally, you can delete the event from the original table
                    $event->delete();
        }
    } catch (\Exception $e) {
        dd('Error during historique update: ' . $e->getMessage());
    }
    }
}
