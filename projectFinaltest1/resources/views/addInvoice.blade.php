<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('styles/addEmployee.css') }}">

</head>
<body>
    <div class="p-5">
        <h1 class="text-center mb-5">Invoice</h1>
        <div class="row">
            <div class="col-md-4">
                <img class="card-img-top mb-3" src="{{ asset('storage/images/' . $items->image) }}" alt="Card image cap" style="width: 250px;">
                <h5>Name: {{$items->name}}</h5>
                <p>Price: Rp{{$items->price}}</p>
                <p>Amount: {{$items->amount}}</p>

                <div class="form-group col-4">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" placeholder="Enter Address" name="address" value="{{ old('address' )}}">
                    @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group col-4">
                    <label class="form-label">Postcode</label>
                    <input type="text" class="form-control @error('postcode') is-invalid @enderror" placeholder="Enter Postcode" name="postcode" value="{{ old('postcode' )}}">
                    @error('postcode')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>


        </div>

        <div class="text-center mt-5">
            <button type="button" class="btn btn-primary">Print Invoice</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh950GNyZPhcTNXj1NW7RuBCsyN/o0jlpcv8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
