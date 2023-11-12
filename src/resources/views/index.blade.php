<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>

  <main>
  @extends('layouts.app')

  @section('css')
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  @endsection

  @section('content')

    <div class="contact-form__content">
        <h2>お問い合わせ</h2>
      </div>
      <form class="form" action="/contacts/confirm" method="post">
      @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--fullname">
              <input type="text" name="name" value="{{ old('name') }}"/>
              <input type="text" name="name" value="{{ old('name') }}"/>
              <p class="form__input--example">例）山田　　　　例）太郎</p>
            </div>
            <div class="form__error">
                @error('name')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
          </div>
          <input type="radio" name="gender" value="male"  checked/>男性
          <input type="radio" name="gender" value="male"/>女性
          <br>
          <br>
            <div class="form__error">
                @error('gender')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" value="{{ old('email') }}"/>
              <p class="form__input--example">例）test@example.com</p>
            </div>
            <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">郵便番号</span>
            <span class="form__label--required">※</span>
            <span>〒</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="postcode" name="postcode" value="{{ old('postcode') }}"/>
              <p class="form__input--example">例）123-4567</p>
            </div>
            <div class="form__error">
                @error('postcode')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="address" name="address" value="{{ old('address') }}"/>
              <p class="form__input--example">例）東京都渋谷区千駄ヶ谷1-2-3</p>
            </div>
            <div class="form__error">
                @error('eaddress')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="buildingname" name="buildingname" value="{{ old('buildingname') }}"/>
              <p class="form__input--example">例）千駄ヶ谷マンション101</p>
            </div>
            <div class="form__error">
                @error('buildingname')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">ご意見</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="content"></textarea>
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認</button>
        </div>
      </form>
    </div>
  @endsection
  </main>
</body>

</html>