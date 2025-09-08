@if(session('error'))
<div id="error-notification" class="error-notif">
    {{ session('error') }}
</div>
@endif

<style>
/* Notif full width, height auto, centered text, besar font */
.error-notif {
    position: fixed;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    width: 90vw; /* full width hampir */
    max-width: 500px; /* batasi max width */
    padding: 15px 20px;
    background-color: #f44336; /* merah cerah */
    color: white;
    font-size: 1.5rem; /* font lebih besar */
    font-weight: bold;
    text-align: center;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    opacity: 0;
    animation: notif-slide-in 0.5s forwards, notif-fade-out 0.5s forwards 5s;
    z-index: 9999;
}

@keyframes notif-slide-in {
    from {top: -50px; opacity: 0;}
    to {top: 20px; opacity: 1;}
}

@keyframes notif-fade-out {
    from {opacity: 1;}
    to {opacity: 0; top: -50px;}
}
</style>

<script>
    // Menghilangkan notif setelah animasi selesai supaya elemen hilang
    document.addEventListener("DOMContentLoaded", function(){
        const notif = document.getElementById('error-notification');
        if(notif){
            setTimeout(() => {
                notif.style.display = 'none';
            }, 5000); // 4 detik sesuai durasi animasi total
        }
    });
</script>


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
