@extends('layouts.app')
@section('title', 'Project Create Page ')
@section('content')

    <div class="container my-2">
        <h2 class="text-center border-bottom pb-2 border-5 border-info">Project Create</h2>
        <form action="{{ route('project.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="name" class="form-control" id="name" name="name" placeholder="Enter the name" />
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" />
            </div>
            <div class="mb-3">
                <label for="contact" class="form-label">number</label>
                <input type="contact" class="form-control" id="contact" name="contact" placeholder="1234567890" />
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="*******" />
            </div>
            <div class="mb-3">
                <label for="c_password" class="form-label">Concirm Password</label>
                <input type="password" class="form-control" id="c_password" name="c_password" placeholder="*******" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
