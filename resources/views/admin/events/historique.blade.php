@extends('layouts.admin')

@section('content')
   <div class="container">
    <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ __('Events Historique') }}
                </h6>
                <div class="ml-auto">
    <a href="{{ route('downloadAllPdf') }}" class="btn btn-primary">
        <span class="icon text-white-50">
            <i class="fa fa-download"></i>
        </span>
        <span class="text">{{ __('Download All as PDF') }}</span>
    </a>
</div>

                <div class="ml-auto">
                    <a href="/admin/dashboard/events" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fa fa-home"></i>
                        </span>
                        <span class="text">{{ __('back to events') }}</span>
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                            <th>
                                Title
                            </th>
                           
                            <th>
                                Start Date
                            </th>                        
                        <th>
                            End Date
                        </th>
                        <th>
                            Price
                        </th>
                        <th>
                        location
                        </th>
                        <th>
                        description
                        </th>
                        <th>
                            Organisateur
                        </th>
                        
                        
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $e)
                        <tr>
                            <td>{{$e->title}}</td>
                                <td>{{$e->start_date}}</td>
                                <td>{{$e->end_date}}</td>
                            <td>{{$e->price}}</td>
                            <td>{{$e->location}}</td>
                            <td>{{$e->description}}</td>   
                            <td>{{$e->user->name}}</td>

                            
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
   </div>
@endsection
