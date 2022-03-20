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

        <div class="m-5">
            <h2>Report</h2><br>
            @foreach ($listdata as $item)
                <div class="card text-center">
                    <div class="card-header">
                    Detail Product
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->generic_name }}</h5>
                        <p class="card-text">{{ $item->form }}</p>
                        <div class="card-body">
                            {{-- <p class="card-text">{{ $item->restriction_formula }}</p> --}}
                            <p class="card-text">Category : {{ $item->name }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
