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
          <form action="{{ route('password.email') }}" method="POST" class="sign-in-form">
            @csrf
            <h2 class="title">Reset Password Akun</h2>
            <p>Silahkan isi E-Mail yang terdaftar.</p>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="email" placeholder="E-Mail" value="{{ old('email') }}" />
              @error ('email')
                <br>
                <p style="color: red">{{$message}}</p>
              @enderror
            </div>
            <br>
            <input type="submit" value="Lanjutkan" class="btn solid" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Anda lupa Password ?</h3>
            <p>
              Jangan khawatir, Anda dapat mereset password dengan cara isi Email yang terdaftar, secara otomatis sistem Kasirmu akan mengirimkan link ke Email Anda untuk mereset password Anda. 
            </p>
            <a href="{{ route('login') }}" class="btn">
              Kembali Ke login
            </a>
          </div>
          <img src="{{ asset('auth/img/lupa_password.svg') }}" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="{{ asset('auth/app.js') }}"></script>
  </body>
</html>

