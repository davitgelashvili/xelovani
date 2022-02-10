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
                    <input type="range" name="rate" value="1" required class="form-range" min="1" max="10">
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
                    <li class="commnets__item h-roman">{{ $comment->comment }}</li>
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
