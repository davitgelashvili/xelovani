@extends('layouts.app');

@section('content');

<section class="slogan">
    <div class="container">
        <div class="slogan__status">
            შეარჩიე ხელოსანი, ნახე კლიენტის შეფასებები და დაათვალიერე მისი ნამუშევრები
        </div>
        <div class="slogan__text">
            ხარ ხელოსანი?
            <a href="{{ route('register') }}" class="slogan__text--btn">დარეგისტრირდი</a>
            <a href="{{ route('login') }}" class="slogan__text--btn">დალოგინდი</a>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        @foreach ($users as $user)
        <div class="col-md-3">
            <a href="/edit/{{ $user->id }}" class="item">
                <figure class="item__cover">
                    <img src="{{ $user->image }}" alt="" class="item__cover--img"> 
                </figure>
                <h1 class="item__title">{{ $user->name }}</h1>
                <div class="item__tags">
                    <div class="item__tags--text">{{ $user->category }}</div>
                    
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
    
@endsection