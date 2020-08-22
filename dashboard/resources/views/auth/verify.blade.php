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
    <title>Verifikasi E-Mail</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifikasi E-Mail Anda') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Link Verifikasi baru telah dikirim ke alamat email Anda.') }}
                        </div>
                    @endif

                    {{ __('Sebelum melanjutkan, periksa pesan masuk/spam email Anda untuk tautan verifikasi.') }}
                    {{ __('Jika Anda tidak menerima email, silahkan klik tombol dibawah ini') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Minta Verifikasi Kembali') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Upsss.. Akun Anda belum Aktif ?</h3>
            <p>
              Jangan khawatir, Verifikasi Email Anda Sekarang dengan klik Tombol Verifikasi E-Mail. 
            </p>
          </div>
          <img src="{{ asset('auth/img/verify_email.svg') }}" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="{{ asset('auth/app.js') }}"></script>
  </body>
</html>

