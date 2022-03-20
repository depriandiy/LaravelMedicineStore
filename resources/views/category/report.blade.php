@extends('layouts.conquer')

@section('conquer')
    <h2>Category that doesn't have medicines data</h2><br>
    @foreach ($data as $item)
        <ul>
            <li>{{ $item->name }}</li>
        </ul>
    @endforeach
@endsection