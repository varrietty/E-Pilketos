<!DOCTYPE html>
<html lang="en">

<head>
  <title>E-Pilketos | Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/other/') ?>dist/vendor/bootstrap/css/bootstrap.min.css">
  <link rel='stylesheet' href='<?= base_url('assets/other/') ?>plugins/sweetalert2/plugins/sweetalert2.min.css'>
</head>

<body>

  <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins');

    html {
      background-color: white;
    }

    body {
      font-family: "Poppins", sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    a {
      color: white;
      display: inline-block;
      text-decoration: none;
      font-weight: 400;
    }

    h1 {
      text-align: center;
      font-size: 50px;
      font-weight: 600;
      display: inline-block;
      margin: 40px 8px 10px 8px;
      color: #cccccc;
      font-family: myFirstFont;
    }

    .wrapper {
      display: flex;
      align-items: center;
      flex-direction: column;
      justify-content: center;
      width: 100%;
      min-height: 100%;
      padding: 20px;
    }

    #formContent {
      -webkit-border-radius: 10px 10px 10px 10px;
      border-radius: 10px 10px 10px 10px;
      background: #fff;
      padding: 30px;
      width: 90%;
      max-width: 370px;
      position: relative;
      -webkit-box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
      box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
      text-align: center;
    }

    #formFooter {
      background-color: #008c00;
      border-top: 1px solid #dce8f1;
      padding: 25px;
      text-align: center;
      font-size: 10px;
      font-weight: 600;
      color: #edf6ff;
      -webkit-border-radius: 0 0 10px 10px;
      border-radius: 0 0 10px 10px;
    }

    .tombol {
      background-color: #FFD700;
      color: white;
      padding: 7px 20px;
      font-size: 13px;
      text-align: center;
      -webkit-box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
      box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
      -webkit-border-radius: 5px 5px 5px 5px;
      border-radius: 5px 5px 5px 5px;
      margin: 5px 10px 10px 10px;
      -webkit-transition: all 0.3s ease-in-out;
      -moz-transition: all 0.3s ease-in-out;
      -ms-transition: all 0.3s ease-in-out;
      -o-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out;
    }

    h1.inactive {
      color: #cccccc;
    }
    
    h1.active {
      color: white;
      text-align: center;
      font-size: 2em;
      font-weight: bolder;
      font-family: myFirstFont;
    }

    input[type=button],
    input[type=submit],
    input[type=reset] {
      background-color: #3c8cbc;
      border: none;
      color: white;
      padding: 15px 80px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      text-transform: uppercase;
      font-size: 13px;
      -webkit-box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
      box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
      -webkit-border-radius: 5px 5px 5px 5px;
      border-radius: 5px 5px 5px 5px;
      margin: 15px 20px 20px 20px;
      -webkit-transition: all 0.3s ease-in-out;
      -moz-transition: all 0.3s ease-in-out;
      -ms-transition: all 0.3s ease-in-out;
      -o-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out;
    }

    input[type=button]:hover,
    input[type=submit]:hover,
    input[type=reset]:hover {
      background-color: #347baa;
    }

    input[type=button]:active,
    input[type=submit]:active,
    input[type=reset]:active {
      -moz-transform: scale(0.95);
      -webkit-transform: scale(0.95);
      -o-transform: scale(0.95);
      -ms-transform: scale(0.95);
      transform: scale(0.95);
    }

    input[type=text],
    input[type=password] {
      background-color: #f6f6f6;
      border: none;
      color: #0d0d0d;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 5px;
      width: 85%;
      border: 2px solid #e6f7ff;
      -webkit-transition: all 0.5s ease-in-out;
      -moz-transition: all 0.5s ease-in-out;
      -ms-transition: all 0.5s ease-in-out;
      -o-transition: all 0.5s ease-in-out;
      transition: all 0.5s ease-in-out;
      -webkit-border-radius: 5px 5px 5px 5px;
      border-radius: 5px 5px 5px 5px;
    }

    input[type=text]:focus {
      background-color: #fff;
      border-bottom: 2px solid #5fbae9;
    }

    input[type=text]::placeholder {
      color: #cccccc;
    }

    .fadeInDown {
      -webkit-animation-name: fadeInDown;
      animation-name: fadeInDown;
      -webkit-animation-duration: 1s;
      animation-duration: 1s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
    }

    @-webkit-keyframes fadeInDown {
      0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
      }

      100% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
      }
    }

    @keyframes fadeInDown {
      0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
      }

      100% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
      }
    }

    @-webkit-keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @-moz-keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    .fadeIn {
      opacity: 0;
      -webkit-animation: fadeIn ease-in 1;
      -moz-animation: fadeIn ease-in 1;
      animation: fadeIn ease-in 1;
      -webkit-animation-fill-mode: forwards;
      -moz-animation-fill-mode: forwards;
      animation-fill-mode: forwards;
      -webkit-animation-duration: 1s;
      -moz-animation-duration: 1s;
      animation-duration: 1s;
    }

    .fadeIn.first {
      -webkit-animation-delay: 0.4s;
      -moz-animation-delay: 0.4s;
      animation-delay: 0.4s;
    }

    .fadeIn.second {
      -webkit-animation-delay: 0.6s;
      -moz-animation-delay: 0.6s;
      animation-delay: 0.6s;
    }

    .fadeIn.third {
      -webkit-animation-delay: 0.8s;
      -moz-animation-delay: 0.8s;
      animation-delay: 0.8s;
    }

    .fadeIn.fourth {
      -webkit-animation-delay: 1s;
      -moz-animation-delay: 1s;
      animation-delay: 1s;
    }


    *:focus {
      outline: none;
    }

    #icon {
      width: 60%;
    }

    * {
      box-sizing: border-box;
    }

    form label {
      display: inline-block;
      position: relative;
      cursor: pointer;
      font-family: myFirstFont;
      font-size: 21px;
      line-height: 28px;
      vertical-align: top;
    }

    form .form-check {
      display: inline-block;
      position: relative;
      width: 50px;
      height: 25px;
    }

    form .form-check::before {
      content: "";
      display: inline-block;
      position: relative;
      width: 50px;
      height: 25px;
      background: #fff;
      border: 3px solid #008c00;
      border-radius: 30px;
      -moz-border-radius: 30px;
    }

    form .form-check::after {
      content: "";
      display: inline-block;
      position: absolute;
      width: 21px;
      height: 19px;
      border-radius: 25px;
      -moz-border-radius: 25px;
      background: #008c00;
      left: 3px;
      top: 3px;
      transition: 0.3s;
      -moz-transition: 0.3s;
      -webkit-transition: 0.3s;
      -khtml-transition: 0.3s;
    }

    form .form-check:checked::after {
      left: 27px;
      background: #009432;
    }
  </style>

  <form id='formlogin' action='<?= site_url('user/userauth/ajax_login') ?>' class='login100-form validate-form'>
    <center class='fadeIn first'>
    <a href="http://epilketos.rplinformatika.my.id/index.html">
      <img class='animated infinite pulse delay-5s' src='<?= get_url_file(get_pengaturan('site_logo')) ?>' style='max-width:250px; width:250px' id='icon' alt='User Icon' /></a>
      <h1 class='active' style='box-shadow:0px 10px 10px 0px rgba(0,0,0,0.1)'></h1>
    </center>
    <div class='wrapper fadeInDown'>
      <div id='formContent'>
        <div class='fadeIn first'>
          <br>
        </div>
        <div style='color:#2f3640; font-size:12px; margin-top:0px; margin-left:22px; margin-right:22px'>
          Login dengan username dan password yang telah terdaftar
        </div>
        <br>
        <input class='form-control fadeIn second' placeholder='Username' name='username' type='text' required="true">
        <span class='fa fa-lg fa-envelope'></span>
        <input class='form-control fadeIn third' id='pass' placeholder='Password' name='password' type='password' required="true">
        <input type='submit' name='submit' class='fadeIn fourth' value='Login' onclick="refreshPage()">
      </div>
    </div>
  </form>

  <script src="<?= base_url('assets/other/') ?>dist/vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="<?= base_url('assets/other/') ?>plugins/sweetalert2/dist/sweetalert2.min.js"></script>
  
  <script>
    $(document).ready(function () {
      $('#formlogin').submit(function (e) {
        var homeurl = '<?= site_url()?>';
        e.preventDefault();
        $.ajax({
          type: 'POST',
          url: $(this).attr('action'),
          data: $(this).serialize(),
          success: function (data) {
            if (data == "ok") {
              console.log('sukses');
              window.location.href = homeurl;
            }
            if (data == "td") {
              swal({
                position: 'top-end',
                type: 'warning',
                title: 'Username atau Password Salah',
                showConfirmButton: false,
                timer: 2500
              });
            }
            if (data == "nologin") {
              swal({
                position: 'top-end',
                type: 'warning',
                title: 'Anda sudah memilih',
                showConfirmButton: false,
                timer: 2500
              });
            }
            if (data == "ta") {
              swal({
                position: 'top-end',
                type: 'warning',
                title: 'Akun belum diaktifkan silahkan hubungi panitia',
                showConfirmButton: false,
                timer: 2500
              });
            }
          }
        });
        return false;
      });
    });

    function refreshPage() {
      location.reload();

      setTimeout(function () {
        location.reload();
      }, 1000);
    }
  </script>
</body>
</html>