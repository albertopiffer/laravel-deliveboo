@extends('layouts.app')
@section('content')
<h1 class="text-center">Show</h1>

<h1 class="text-center">{{$dish->name}}</h1>
 <div class="card bg-dark text-white col-6 m-auto  ">
    <img src="https://picsum.photos/150/50" class="card-img" alt="...">
    <div class="card-img-overlay">


    </div>
</div>

@endsection