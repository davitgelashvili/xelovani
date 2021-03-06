@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('register') }} " enctype="multipart/form-data" class="register">
        <div class="card-header">{{ __('Register') }}</div>
        @csrf

        <label class="register__label">
            <p class="register__label--title">{{ __('სახელი გვარი') }}</p>
            <input id="name" type="text" class="register__input" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </label>

        <label class="register__label">
            <p class="register__label--title">{{ __('ელ-ფოსტა') }}</p>
            <input id="email" type="email" class="register__input" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </label>

        <label class="register__label">
            <p class="register__label--title">{{ __('მობილური') }}</p>
            <input id="mobile" type="text" class="register__input" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" >

            @error('mobile')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </label>

        <label class="register__label">
            <p class="register__label--title">{{ __('ქალაქი') }}</p>
            <input id="city" type="text" class="register__input" name="city" value="{{ old('city') }}" required autocomplete="city" >

            @error('city')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </label>  

        <label class="register__label">
            <p class="register__label--title">{{ __('კატეგორია') }}</p>
            <select name="category" class="register__input" id="inputGroupSelect01">
                <option selected>Choose...</option>
                <option value="უნივერსალი">უნივერსალი</option>
                <option value="გალესვა">გალესვა</option>
                <option value="იატაკის მოჭიმვა (სტიაშკა)">იატაკის მოჭიმვა (სტიაშკა)</option>
                <option value="მშენებელი">მშენებელი</option>
                <option value="რემონტი">რემონტი</option>
                <option value="კაფელი">კაფელი</option>
                <option value="მეტლახი">მეტლახი</option>
                <option value="ლამინატი">ლამინატი</option>
                <option value="კარ-ფანჯარა">კარ-ფანჯარა</option>
                <option value="რკინის კონსტრუქცია">რკინის კონსტრუქცია</option>
                <option value="მინ">მინ</option>
                <option value="ხის კონსტრუქცია">ხის კონსტრუქცია</option>
                <option value="დანგრევა">დანგრევა</option>
                <option value="ელექტრიკოსი">ელექტრიკოსი</option>
                <option value="სანტექნიკა">სანტექნიკა</option>
                <option value="ცენტრალური გათბობა">ცენტრალური გათბობა</option>
                <option value="მუშა">მუშა</option>
                </select>
            @error('category')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </label>  

        <label class="register__label">
            <p class="register__label--title">{{ __('მოკლედ თქვენს გამოცდილებაზე') }}</p>
            <textarea name="description" value="{{ old('description') }}" class="register__input" cols="20" rows="4"></textarea>
            @error('city')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </label>

        <label class="register__label">
            <p class="register__label--title">{{ __('პაროლი') }}</p>
            <input id="password" type="password" class="register__input" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </label>

        <label class="register__label">
            <p class="register__label--title">{{ __('გაიმეორეთ პაროლი') }}</p>
            <input id="password-confirm" type="password" class="register__input" name="password_confirmation" required autocomplete="new-password">
        </label>

        <label class="register__label">
            <p class="register__label--title">ატვირთეთ ერთ-ერთი ნამუშევრის სურათი</p>
            <input name="image" class="register__input" type="file" id="formFile">
        </label>

        <label class="register__label">
            <button class="slogan__text--btn" type="submit">
                    {{ __('რეგისტრაცია') }}
            </button>
        </label>
    </form>
</div>
@endsection
