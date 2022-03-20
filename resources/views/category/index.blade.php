@extends('layouts.conquer')

@section('conquer')
    <h2>List Category</h2><br>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Created_at</th>
                <th scope="col">Updated_at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listcat as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>
                        <a href="category/listmedicine/{{ $item->id }}">{{ $item->name }}</a>
                    </td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection