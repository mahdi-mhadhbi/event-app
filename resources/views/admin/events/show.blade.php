@extends('layouts.admin')

@section('content')
   <div class="container">
    <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ __('Events') }}
                </h6>
                
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
                        <th class="text-center" style="width: 30px;">Action</th>
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
                         
                            <td>  <div class="btn-group btn-group-sm">
                                    <a onClick="return confirm('Are you sure you want to delete this event?')"href="{{ route('Eventdestroy', ['id' => $e->id, 'delete' => 1]) }}"  class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>

                                    

                                </div></td>
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
