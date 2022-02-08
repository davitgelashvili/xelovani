@extends('layouts.app')

@section('content')
<div class="container">
    <div class="detail">
        <div>
            <div class="detail__profile">
                <figure class="detail__profile--cover">
                    <img src="{{ asset($user->image) }}" alt="" class="w-100"> 
                </figure>
                <div class="detail__info">
                    <h1 class="detail__info--title">{{ $user->name }}</h1> 
                    <p>შეფასება <span class="text-danger">{{ $rate }}</span></p>
                    <input type="range" value="{{ $rate }}" class="form-range" min="0" max="10" id="customRange2">
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
                    <p>შეაფასე</p>
                    <input name="rate" type="number" value="5" min="0" max="10">
                </div>
                <div>
                    <p>დაწერე კომენტარი</p>
                    
                        <input type="text" class="form-control" name="comment" required>
                
                        <button class="btn btn-success" type="submit">გაგზავნა</button>
                </form>
            </div>
                
                <ul class="list-group">
                    @foreach ($comments as $comment )
                        <li class="list-group-item">{{ $comment->comment }}</li>
                    @endforeach
                </ul>
                
                </div>
        </div>
        <div class="other">
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
            

            

        </div>
    </div>
</div>
@endsection
