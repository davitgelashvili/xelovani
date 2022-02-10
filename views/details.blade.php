@extends('layouts.app')

@section('content')
<div class="container">
    <div class="detail">
        <div class="detail__profile">
            <figure class="detail__profile--cover">
                <img src="{{ asset($user->image) }}" alt="" class="detail__profile--cover--img"> 
            </figure>
            <div class="detail__info">
                <h1 class="detail__info--title">{{ $user->name }}</h1> 
                <p>შეფასება: <span class="text-danger">{{ $rate }}</span></p>
                <a href="tel:{{ $user->mobile }}" class="detail__info--call">{{ $user->mobile }}</a>
                <div class="detail__info--desc">
                    {{ $user->description }}
                </div>
            </div>
        </div>
        <div class="detail__footer">
            <form action="/edit/{{ $user->id }}" method="post">       
                @csrf  
                <div>
                    <p class="detail__footer--title">შეაფასე 1 დან 10 მდე</p>
                    <!-- <input name="rate" type="number" value="5" min="0" max="10"> -->
                    <input type="range" name="rate" value="1" required class="register__range" min="1" max="10">
                </div>
                <div>
                    <p class="detail__footer--title">დაწერე კომენტარი</p>
                    <textarea type="text" class="register__input" name="comment" cols="20" rows="4" required></textarea>
                    <button class="slogan__text--btn" type="submit">გაგზავნა</button>
                </div>
            </form>
            <ul class="commnets">
                <h1>კომენტარები</h1>
                @foreach ($comments as $comment )
                    <li class="commnets__item h-roman">
                        <div class="commnets__item--profile">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M349.5 308.4C368.2 303.1 385.4 320.4 374.1 336.5C350.4 374.6 306.3 399.1 255.9 399.1C205.6 399.1 161.5 374.6 136.9 336.5C126.5 320.4 143.7 303.1 162.3 308.4C191.3 315.1 222.8 318.8 255.9 318.8C289 318.8 320.6 315.1 349.5 308.4zM208.4 208C208.4 225.7 194 240 176.4 240C158.7 240 144.4 225.7 144.4 208C144.4 190.3 158.7 176 176.4 176C194 176 208.4 190.3 208.4 208zM304.4 208C304.4 190.3 318.7 176 336.4 176C354 176 368.4 190.3 368.4 208C368.4 225.7 354 240 336.4 240C318.7 240 304.4 225.7 304.4 208zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"/></svg>
                        </div>
                        {{ $comment->comment }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<!-- <div class="other">
    <h2>სხვა ხელოსნები</h2>
    @foreach ($except as $each )
        <table class="table">
        <thead>
            <tr>
                <th scope="col"><a href="/edit/{{ $each->id }}">{{ $each->name }}</a></th>
            
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    {{ $each->category }}
                </td>
            </tr>
        </tbody>
    </table>
    @endforeach
</div> -->
@endsection
