@extends('layouts.app')

@section('content')

<section class="slogan">
    <div class="container">
@guest
        <div class="slogan__status">
            შეარჩიე ხელოსანი, ნახე კლიენტის შეფასებები და დაათვალიერე მისი ნამუშევრები
        </div>
        <div class="slogan__text">
            ხარ ხელოსანი?
            <a href="{{ route('register') }}" class="slogan__text--btn">დარეგისტრირდი</a>
        </div>
@else 
        <div class="slogan__status">
            გამარჯობა {{ Auth::user()->name }}

            <span class="item__tags--text" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('გასვლა') }}
            </span>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
@endguest
            <!-- <a href="{{ route('login') }}" class="slogan__text--btn">დალოგინდი</a> -->
    </div>
</section>

<div class="container">
    <div class="row">
@foreach ($users as $user)
        <div class="col">
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