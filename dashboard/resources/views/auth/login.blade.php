<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{ asset('auth/style.css') }}" />
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          @if (session('status'))
              <p style="color: green">{{ session('status') }}</p>
          @endif
          <form action="{{ route('login') }}" method="POST" class="sign-in-form">
            @csrf
            <h2 class="title">Selamat Datang</h2>
            <p>Silahkan masuk dengan E-Mail dan Password Anda.</p>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="email" placeholder="E-Mail" value="{{ old('email') }}" />
              @error ('email')
                <br>
                <p style="color: red">{{$message}}</p>
              @enderror
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
              @error ('password')
                <br>
                <p style="color: red">{{$message}}</p>
              @enderror
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <a href="{{ route('password.request') }}">Anda Lupa Password ?</a>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Belum punya akun Kasirmu ?</h3>
            <p>
              Daftar Sekarang, dapatkan kemudahan monitoring penjualan outlet Anda. 
            </p>
            <a href="{{ route('register') }}" class="btn">
              REGISTER
            </a>
          </div>
          <img src="{{ asset('auth/img/login.svg') }}" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="{{ asset('auth/app.js') }}"></script>
  </body>
</html>
