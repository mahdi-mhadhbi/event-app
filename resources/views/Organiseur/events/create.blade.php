@extends('layouts.organisateur')

@section('content')
@if(session('message'))
    <div class="alert alert-{{ session('alert-type') }}">
        {{ session('message') }}
    </div>
@endif

    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ __('Create Event') }}
                </h6>
                <div class="ml-auto">
                    <a href="/organisateur/dashboard/index" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fa fa-home"></i>
                        </span>
                        <span class="text">{{ __('Back to events') }}</span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                
                <form action="{{ route('Eventstore') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="title">title</label>
                                <input class="form-control" id="title" type="text" name="title" value="{{ old('title') }}">
                                @error('title')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
    <div class="col-12">
        <div class="form-group">
            <label for="start_date">Start Date and Time</label>
            <input type="datetime-local" id="start_date" name="start_date" class="form-control" value="{{ old('start_date', now()->format('Y-m-d\TH:i')) }}">
            @error('start_date')<span class="text-danger">{{ $message }}</span>@enderror
        </div>
    </div>
</div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="delivery_date">end_date</label>
                                <input type="datetime-local" id="end_date" name="end_date" class="form-control" value="{{ old('end_date', now()->format('Y-m-d\TH:i')) }}">
                                @error('end_date')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="price">price</label>
                                <input id="price" name="price" class="form-control " value="{{ old('price') }}"/>
                                @error('price')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                    <!-- Add these lines to your form -->
<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label for="location">Location</label>
            <input class="form-control" id="location" type="text" name="location" value="{{ old('location') }}">
            @error('location')<span class="text-danger">{{ $message }}</span>@enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" id="image" name="image" class="form-control-file">
            @error('image')<span class="text-danger">{{ $message }}</span>@enderror
        </div>
    </div>
</div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="description">description</label>
                                <textarea id="description" name="description" class="form-control " rows="4"></textarea>
                                @error('description')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                    
                  

                    

                    <div class="form-group pt-4">
                        <button class="btn btn-primary" type="submit" name="submit">{{ __('Save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


