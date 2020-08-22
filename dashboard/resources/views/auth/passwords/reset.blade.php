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
    <title>Reset Password</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          @if (session('status'))
              <p style="color: green">{{ session('status') }}</p>
          @endif
          <form action="{{ route('password.update') }}" method="POST" class="sign-in-form">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <h2 class="title">Reset Password Akun</h2>
            <p>Silahkan isi Password Baru Anda.</p>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="email" placeholder="E-Mail" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus />
              @error ('email')
                <br>
                <p style="color: red">{{$message}}</p>
              @enderror
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="text" name="password" placeholder="Password Baru" />
              @error ('password')
                <br>
                <p style="color: red">{{$message}}</p>
              @enderror
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="text" name="password_confirmation" placeholder="Konfirmasi Password" />
              @error ('password_confirmation')
                <br>
                <p style="color: red">{{$message}}</p>
              @enderror
            </div>
            <br>
            <input type="submit" value="Reset Password" class="btn solid" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Tinggal selangkah lagi !</h3>
            <p>
              Selamat Anda sudah berhasil meminta reset password, pada tahap ini Anda diminta mengisi password baru pada kolom Password Baru dan juga konfirmasi ulang password baru Anda. 
            </p>
          </div>
          <img src="{{ asset('auth/img/reset_password.svg') }}" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="{{ asset('auth/app.js') }}"></script>
  </body>
</html>


