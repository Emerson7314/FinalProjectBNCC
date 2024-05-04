<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UserView</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"
    integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous">
    </script>
</head>
<body>
    <div class="text-center mt-5">
        <h4 class="text-center">PT CHIPI CHAPA ITEM'S CATALOGUE</h4>
    </div>

    @foreach ($categories as $c)
        <h1>{{$c->name}}</h1>
        @foreach($items as $s)
            @if($c->id != $s->CategoryId)
                @continue
            @endif

            <div class="d-flex flex-column">
                <div class="col-4 mb-3 mt-5">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('storage/images/' . $s->image) }}"
                            alt="Card image cap" style="width: 18rem; height: 15rem;">
                        <div class="card-body">
                            <h5 class="card-title text-truncate">{{$s->name}}</h5>
                            <p class="card-text text-secondary" style="font-size: 14px; font-style:italic;">Price: {{$s->price}}</p>
                            <p class="card-text text-secondary" style="font-size: 14px; font-style:italic;">Color: {{$s->color}}</p>
                            <p class="card-text text-secondary" style="font-size: 14px; font-style:italic;">Size: {{$s->size}}</p>

                            <div class="d-flex justify-content-between">
                                <a href="/add-order/{{$s->id}}" class="btn btn-secondary">Order Item</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endforeach
</body>
</html>
