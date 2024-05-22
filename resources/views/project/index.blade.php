<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container my-2">
        <h2 class="text-center border-bottom border-info pb-2">View Page</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sr No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">contact</th>
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
                        <td> {{ $dt->contact }}</td>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
