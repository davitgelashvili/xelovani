@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
    @foreach ($users as $user)
            <div class="col">
                <a href="/profile/{{ $user->id }}" class="item">
                    <figure class="item__cover">
                        <img src="/{{ $user->image }}" alt="" class="item__cover--img"> 
                    </figure>
                    <h1 class="item__title">{{ $user->name }}</h1>
                    <div class="item__tags">
                        <div class="item__tags--text">{{ $user->category }}</div>
                    </div>
                </a>
            </div>
    @endforeach
        </div>    
@endsection