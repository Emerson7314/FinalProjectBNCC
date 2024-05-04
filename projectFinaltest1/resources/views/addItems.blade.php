<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Items</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('styles/addEmployee.css') }}">


</head>

<body>
    <div class="d-flex flex-column justify-content-center w-10 h-10">

    </div>
    <h2 class="text-center mt-5">Add New Items</h2>
    <a href="/adminDashboard" class="btn btn-primary">Back to Admin's Dashboard</a>

    <form action="/store-items" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="d-flex flex-column align-items-center pt-3 gap-3">
            <div class="form-group col-4">
                <label class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Item's Name" name="name" value="{{ old('name' )}}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group col-4">
                <label class="form-label">Price</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" placeholder="Enter Price" name="price" value="{{ old('price' )}}">
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group col-4">
                <label class="form-label">Amount</label>
                <input type="number" class="form-control @error('amount') is-invalid @enderror" placeholder="Enter Amount" name="amount" value="{{ old('amount' )}}">
                @error('amount')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group col-4">
                <label class="form-label">Image</label>
                <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image">
                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <label for="">Category</label><br>
            @if(!$categories)
                <p>No Category Yet</p>
            @else

                @foreach ($categories as $c)
                    <input type="radio" id="{{$c->id}}" name="CategoryId" value="{{$c->id}}">
                    <label for="{{$c->id}}">{{$c->name}}</label><br>
                @endforeach
            @endif

            @error('CategoryId')
                <p style="color: red;">{{$message}}</p>
            @enderror
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
</body>

</html>
