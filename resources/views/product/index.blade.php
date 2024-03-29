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
            <h2>List Product</h2><br>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Form</th>
                        <th scope="col">Restriction Formula</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Category Name</th>
                        {{-- <th scope="col">TK 1</th>
                        <th scope="col">TK 2</th>
                        <th scope="col">TK 3</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listdata as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td><a href="medicines/{{ $item->id }}">{{ $item->generic_name }}</a></td>
                            <td>{{ $item->form }}</td>
                            <td>{{ $item->restriction_formula }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->category->name }}</td>
                            {{-- <td>{{ $item->faskes1 }}</td>
                            <td>{{ $item->faskes2 }}</td>
                            <td>{{ $item->faskes3 }}</td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
            
        @endsection
{{-- 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html> --}}
