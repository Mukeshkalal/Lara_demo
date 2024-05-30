@extends('layouts.app')
@section('title', 'Crud View Page')
@section('content')

    <div class="container my-2">
        <h2 class="text-center border-bottom border-info pb-2">View Page</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sr No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $dt)
                    <tr>
                        <th scope="row">{{ $dt->id }}</th>
                        <td>{{ $dt->name }}</td>
                        <td>{{ $dt->email }}</td>
                        <td>{{ $dt->contact }}</td>
                        <td>
                            <a href="{{ url('edit', $dt->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ url('delete', $dt->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
