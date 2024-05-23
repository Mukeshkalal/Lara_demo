<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container my-2">
        <form action="{{ route('project.store') }}" method="post">
            <h2 class="text-center border-bottom pb-2 border-5 border-info">Project Create</h2>
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="name" class="form-control" id="name" name="name" placeholder="Enter the name" />
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif

            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email"
                    placeholder="name@example.com" />
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="contact" class="form-label">number</label>
                <input type="contact" class="form-control" id="contact" name="contact" placeholder="1234567890" />
                @if ($errors->has('contact'))
                    <span class="text-danger">{{ $errors->first('contact') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="*******" />
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="c_password" class="form-label">Concirm Password</label>
                <input type="password" class="form-control" id="c_password" name="c_password" placeholder="*******" />
                @if ($errors->has('c_password'))
                    <span class="text-danger">{{ $errors->first('c_password') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
