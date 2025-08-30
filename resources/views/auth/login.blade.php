<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
  </head>
  <body>
    <div class="login">
      <div class="frame-wrapper">
        <div class="frame">
          <img class="rectangle" src="img/rectangle-3.png" />
          <div class="div">
            <div class="frame-2">
              <div class="div-wrapper"><div class="text-wrapper">Welcome!</div></div>
              <div class="frame-3">
                <p class="p">
                  Proin id ligula dictum, convallis enim ut, facilisis massa. Mauris a nisi ut sapien blandit imperdie
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
                        <input type="text" placeholder="IP Address" class="input-custom" name="ip">
                      </div>
                      <div class="input-box">
                        <div class="frame-8"><div class="text-wrapper-3">User Name</div></div>
                        <input type="text" placeholder="Name" class="input-custom" name="user">
                      </div>
                      <div class="input-box">
                        <div class="frame-8"><div class="text-wrapper-3">Password</div></div>
                        <input type="password" placeholder="Password" class="input-custom" name="pass">
                      </div>
                    </div>
                    <div class="button-wrapper">
                      <button type="submit" class="button">Button</button>
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
