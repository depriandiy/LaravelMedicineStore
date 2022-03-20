@extends('layouts.conquer')
@section('conquer')

<div class="m-5">
    <h2>Average Price of Each Drug Category</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Average Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($avg as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->average }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection