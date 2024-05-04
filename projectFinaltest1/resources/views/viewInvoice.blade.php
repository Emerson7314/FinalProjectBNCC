<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <div class="text-center mt-6">
        <h4 class="text-center">View Invoice</h4>
        <a href="/adminDashboard" class="btn btn-primary">Return to Dashboard</a>
    </div>

    <div class="p-3">
        @foreach($invoice as $i)
        <img class="card-img-top" src="{{asset('storage/images/' . $i->items->images)}}" alt="Card image cap" style="width: 18rem; height: 15rem;">
            <p>Name: {{$items->name}}</p>
            <p>Price: {{$items->price}}</p>
            <p>Amount: {{$items->amount}}</p>
            <p>Address: {{$i->address}}</p>
            <p>Postcode: {{$i->postcode}}</p>
            <p>Total Price: {{$i->totalPrice}}</p>
    </div>
</body>
</html>
