@extends('layouts.app')
@section('content')
<h1 class="text-center">Show</h1>

<h1 class="text-center">{{$dish->name}}</h1>
 <div class="card bg-dark text-white col-6 m-auto box-shadow">
    <img src="https://picsum.photos/150/50" class="card-img box-shadow" alt="...">
    <div class="card-img-overlay">


    </div>
</div>

@endsection

<style>
    
.box-shadow {
    transition: transform .2s;
    box-shadow: 0px 0px 14px 5px rgba(0,0,0,0.44); 
}

.box-shadow:hover{
    transform: scale(1.05);
}


</style>