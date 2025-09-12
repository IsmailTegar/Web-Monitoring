
<!DOCTYPE html>
<html>
  <head>
    <title>Selamat Datang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
  </head>
  <body>
    <div class="login">
      <div class="frame-wrapper">
        <div class="frame">
          <img class="rectangle" src="{{ asset('images/logo.jpeg') }}" alt="logo"/>
          <div class="div">
            <div class="frame-2">
              <div class="div-wrapper"><div class="text-wrapper">Welcome!</div></div>
              <div class="frame-3">
                <p class="p">
                  Admin Telah Datang, SELAMAT DATANG ADMIN!!!!!
                </p>
              </div>
            </div>
              <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div class="frame-4">
                  <div class="frame-5"><div class="text-wrapper-2">Login</div></div>
                  <div class="frame-6">
                    <div class="frame-7">
                      <div class="input-box">
                        <div class="frame-8"><div class="text-wrapper-3">IP Address</div></div>
                        <input type="text" placeholder="IP Address" class="input-custom @error('ip') is-invalid @enderror" value="{{ old('ip') }}" name="ip">
                        @error('ip')
                          <div id="emailHelp" class="form-text alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="input-box">
                        <div class="frame-8"><div class="text-wrapper-3">User Name</div></div>
                        <input type="text" placeholder="Name" class="input-custom @error('user') is-invalid @enderror" value="{{ old('user') }}" name="user">
                        @error('user')
                          <div id="emailHelp" class="form-text alert alert-danger" style="color: red">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="input-box">
                        <div class="frame-8"><div class="text-wrapper-3">Password</div></div>
                        <input type="password" placeholder="Password" class="input-custom @error('pass') is-invalid @enderror" name="pass">
                      </div>
                    </div>
                    <div class="button-wrapper" style="color:white">
                      <button type="submit" class="button">Login</button>
                    </div>
                  </div>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
