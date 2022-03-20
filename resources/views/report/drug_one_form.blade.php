@extends('layouts.conquer')
@section('conquer')

<div class="m-5">
    <h2>Average Price of Each Drug Category</h2><br>
    @foreach ($one_form as $item)
        <ul>
            <li>{{ $item->generic_name }}</li>
        </ul>
    @endforeach
</div>
    
@endsection