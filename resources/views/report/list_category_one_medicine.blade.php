@extends('layouts.conquer')
@section('conquer')

<div class="m-5">
    <h2>Drug Categories that Have Only 1 Medicine Product</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Total Medicines</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($one as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->total }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection