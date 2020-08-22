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
          <form action="{{ route('register') }}" method="POST" class="sign-in-form">
            @csrf
            <h2 class="title">Daftar Sekarang !</h2>
            <div class="input-field">
              <i class="fas fa-store"></i>
              <input type="text" name="name_outlet" placeholder="Nama Outlet" value="{{ old('name_outlet') }}" />
              @error ('name_outlet')
                <br>
                <p style="color: red">{{$message}}</p>
              @enderror
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="name" placeholder="Nama Pemilik" value="{{ old('name') }}"/>
              @error ('name')
                <br>
                <p style="color: red">{{$message}}</p>
              @enderror
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"/>
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
              <p class="social-text">Dengan mendaftar Anda menyatakan setuju Syarat & Ketentuan di Kasirmu</p>
            <input type="submit" class="btn" value="Mendaftar" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Sudah Punya Akun Kasirmu ?</h3>
            <p>
              Silahkan masuk ke Admin Area, Anda dapat mengatur dan melihat perkembangan Outlet Anda.
            </p>
            <a href="{{ route('login') }}" class="btn">
              Kembali ke Login
            </a>
          </div>
          <img src="{{ asset('auth/img/register.svg') }}" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="{{ asset('auth/app.js') }}"></script>
  </body>
</html>
