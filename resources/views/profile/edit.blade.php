@extends('layouts.app')

@section('content')
    @include('layouts.navbar')
    @foreach($data as $info)
    <div class="container   my-5 py-5 z-depth-1">
    <section class="text-center text-lg-left dark-grey-text">
        <form action="" methood="POST">
        <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" placeholder="Name" value="{{ $info->name }}" required>
        </div>
        <div class="form-group">
        <label for="name">Email:</label>
        <input type="text" class="form-control" placeholder="Name" value="{{ $info->email }}" required>
        </div>
        <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" placeholder="Name" value="{{ $info->name }}" required>
        </div>
        <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" placeholder="Name" value="{{ $info->name }}" required>
        </div>
        <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" placeholder="Name" value="{{ $info->name }}" required>
        </div>
        </form>
    </section>
    </div>        
    @endforeach
@endsection