{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>My Store</title>
    </head>
    <body> --}}
        {{-- Navbar Component --}}
        {{-- @include('partials.navbar') --}}
        @extends('layouts.conquer')
        @section('conquer')
            <div class="m-5">
                <h2>Detail Product</h2><br>
                @if ($message)
                    <div class="card text-center">
                        <div class="card-header">
                            <img src="{{ asset("img/product".$message->id.".jpg") }}" alt="image" width="250">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $message->generic_name }}</h5>
                            <p class="card-text">{{ $message->form }}</p>
                            <div class="card-body">
                                <p class="card-text">{{ $message->restriction_formula }}</p>
                                <p class="card-text">{{ $message->description }}</p>
                                <p class="card-text">Category : {{ $message->category->name }}</p>
                            </div>
                        </div>
                    </div>
                @else
                    <h2>Tidak ada data</h2>
                @endif
            </div>
        @endsection

        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html> --}}
