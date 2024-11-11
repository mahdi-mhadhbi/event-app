@extends('layouts.organisateur')

@section('content')
<style>
    /* Add this to your stylesheet or in a style tag within your HTML file */

.card {
    margin-bottom: 20px;
    transition: 0.3s;
    border-radius: 10px;
}

.card:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.card-header {
    border-bottom: 1px solid #ddd;
    padding: 10px;
    font-size: 16px;
    font-weight: bold;
}

.card-body {
    padding: 15px;
}

.card-body h2 {
    font-size: 1.5em;
    margin-bottom: 10px;
}

.text-muted {
    color: #777;
}

.fa-li {
    width: 2em;
    text-align: center;
}

.card-footer {
    background-color: #f9f9f9;
    border-top: 1px solid #ddd;
    padding: 10px;
}

.card-footer a {
    margin-left: 10px;
}

.img-circle {
    border-radius: 50%;
}

.btn-primary {
    background-color: #007bff;
    color: #fff;
    
}

.btn-primary:hover {
    background-color: #0056b3;
}

.btn-bg-teal {
    background-color: #008080;
    color: #fff;
}

.btn-bg-teal:hover {
    background-color: #006666;
}
.form-container {
        max-width: 600px;
        margin: auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    input,
    textarea {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-top: 5px;
    }

    button {
        background-color: #007bff;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }
    .user-image-top-right {
        position: absolute;
        top: 10px;
        right: 10px;
    }

</style>

    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex">
                <div class="ml-auto">
                    <a href="/organisateur/dashboard/index" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fa fa-home"></i>
                        </span>
                        <span class="text">{{ __('Go to events') }}</span>
                    </a>
                </div>
            </div>
           <!-- organizer_card.blade.php -->
           

           <div class="container">
            <h1>Edit Profile</h1>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('updateProfil', ['id' => $user->id]) }}" method="post" enctype="multipart/form-data">
                 @csrf
                 @method('put')

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name"  value="{{ old('name', $user->name) }}" required>
               
                </div>
                
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="text" name="age" value="{{ old('age', $user->age) }}">
                </div>

                <div class="form-group">
                    <label for="phone">Phone #:</label>
                    <input type="text" name="phone" value="{{ old('phone', $user->phone) }}">
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" value="{{ old('email', $user->email) }}">
                </div>
                <div class="form-group">
                    <label for="nb_events">Image:</label>
                    <input type="file" name="imageUser" value="{{ old('imageUser', $user->imageUser) }}">
                </div>

                <div class="form-group">
                    <p for="nb_events">NB Events: 18</p>
                </div>

                <div class="card-footer">
            <div class="text-right">
                <button href="" class="btn btn-sm btn-primary" type="submit">
                    <i class="fas fa-user"></i> Update Profile
                </button>
            </div>
        </div>  
            </form>
        </div>
        
    


        </div>
    </div>
@endsection


