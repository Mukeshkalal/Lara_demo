@extends('layouts.app')
@section('title', 'crud Edit Page')
@section('content')

    <div class="container my-2">
        <form action="{{ route('crud.update', $data->id) }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="name" class="form-control" id="name" name="name" value="{{ $data->name }}"
                    placeholder="Enter the name" />
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $data->email }}"
                    placeholder="name@example.com" />
            </div>
            <div class="mb-3">
                <label for="contact" class="form-label">Contact</label>
                <input type="contact" class="form-control" id="contact" name="contact" value="{{ $data->contact }}"
                    placeholder="1234567890" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
