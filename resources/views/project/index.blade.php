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
                    <th scope="col">Password</th>
                    <th scope="col">c_Password</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $dt)
                    <tr>
                        <th> {{ $dt->id }}</th>
                        <td> {{ $dt->name }}</td>
                        <td> {{ $dt->email }}</td>
                        <td> {{ $dt->numbar }}</td>
                        <td> {{ $dt->password }}</td>
                        <td> {{ $dt->c_password }}</td>
                        <td>
                            <a href="{{ url('project/' . $dt->id . '/edit') }}" class="btn btn-info">Edit</a>
                            <form action="{{ url('project/' . $dt->id) }}" method="post" class="my-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="container">
        <a href="{{ route('project.create') }}" class="btn btn-primary">Add Data</a>
    </div>
@endsection
