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
            <h2>List Medicine by Category</h2>
            <p>ID Category : {{ $id_category }} with name : {{ $namecategory }}</p>
            <hr/>
            <p>Total Rows : {{ $getTotalData }}</p>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Form</th>
                        <th>Restriction Formula</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($result as $item)
                        <tr>
                            <td>{{ $item->generic_name }}</td>
                            <td>{{ $item->form }}</td>
                            <td>{{ $item->restriction_formula }}</td>
                            <td>{{ $item->price }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
            
        @endsection

        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html> --}}
