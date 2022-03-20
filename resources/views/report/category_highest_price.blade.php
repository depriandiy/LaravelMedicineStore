@extends('layouts.conquer')
@section('conquer')

<div class="m-5">
    <h2>Category and Name of Drugs That Has The Highest Price</h2><br>
    <h4>Category : {{ $highest->name }}</h4>
    <h5>Generic Name : {{ $highest->generic_name }}</h5>
    <h6><b>Price : {{ $highest->price }}</b></h6>
</div>
    
@endsection