<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('styles/addEmployee.css') }}">

</head>
<body>

    <div class="text-center mt-5">
        <h4 class="text-center">Add Category</h4>

        <a href="/adminDashboard" class="btn btn-primary">Return to Admin's Dashboard</a>
    </div>

    <div class="p-5">
        <h1>Add Category</h1>
        <form action="/store-category" method="POST">
            @csrf
            <div class="mb-3">
                <label for="Name" class="form-label">Category Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" value="{{old('name')}}">
                @error('name')
                    <p style="color: red;">{{$message}}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh950GNyZPhcTNXj1NW7RuBCsyN/o0jlpcv8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
