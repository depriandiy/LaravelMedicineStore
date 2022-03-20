<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>My Store</title>
    </head>
    <body>
        {{-- Navbar Component --}}
        @include('partials.navbar')

        <div class="container mt-4">
            {{-- Pake Grid --}}
            <div class="row row-cols-4">
                @foreach ($listdata as $item)
                    <div class="col mb-2">
                        <div class="card">
                            <a href="medicines/{{ $item->id }}">
                                <img src="img/product{{ $item->id }}.jpg" class="card-img-top" alt="{{ $item->generic_name }}">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">{{ $item->generic_name }}</h4>
                                <h6 class="card-text">{{ $item->form }}</h6>
                                <p class="card-text">{{ $item->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
