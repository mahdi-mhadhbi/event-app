<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event ;
use App\Models\Historique ;
use PDF;
use App\Jobs\DownloadPDF;
class EventsAdminController extends Controller
{
    public function adminarchive(){
        $data = Historique::all();
        return view('admin.events.historique',compact('data'));
    }
    public function getAll(){
        $data = Event::all();
        return view('admin.events.show',compact('data'));
    }
    
    public function downloadPdf(){
        {
            $data = Historique::all();
        
            $pdf = PDF::loadView('historiquePDF', compact('data'));
        
            return $pdf->download('historique_all.pdf');
        }
    }
}
