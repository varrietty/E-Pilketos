<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
   <title>E-Pilketos | Admin Login</title>
   <meta charset="utf-8">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   <style>
      @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
      * {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
         font-family: 'Poppins', sans-serif;
      }
      html, body {
         height: 100%;
      }
      body {
         display: grid;
         place-items: center;
         background: #dde1e7;
         text-align: center;
      }
      .content {
         width: 330px;
         padding: 40px 30px;
         background: #dde1e7;
         border-radius: 10px;
         box-shadow: -3px -3px 7px #ffffff73, 2px 2px 5px rgba(94, 104, 121, 0.288);
      }
      .content .text {
         font-size: 24px;
         font-weight: 600;
         margin-bottom: 35px;
         margin-top: 13px;
         color: #595959;
      }
      .field {
         height: 50px;
         width: 100%;
         display: flex;
         position: relative;
         margin-top: 20px;
      }
      .field input {
         height: 100%;
         width: 100%;
         padding-left: 45px;
         outline: none;
         border: none;
         font-size: 18px;
         background: #dde1e7;
         color: #595959;
         border-radius: 25px;
         box-shadow: inset 2px 2px 5px #BABECC, inset -5px -5px 10px #ffffff73;
      }
      .field input:focus {
         box-shadow: inset 1px 1px 2px #BABECC, inset -1px -1px 2px #ffffff73;
      }
      .field span {
         position: absolute;
         color: #595959;
         width: 50px;
         line-height: 50px;
      }
      button {
         margin: 15px 0;
         width: 100%;
         height: 50px;
         font-size: 18px;
         line-height: 50px;
         font-weight: 600;
         background: #dde1e7;
         border-radius: 25px;
         border: none;
         outline: none;
         cursor: pointer;
         color: #595959;
         box-shadow: 2px 2px 5px #BABECC, -5px -5px 10px #ffffff73;
      }
      button:focus {
         color: #3498db;
         box-shadow: inset 2px 2px 5px #BABECC, inset -5px -5px 10px #ffffff73;
      }
   </style>
</head>
<body>
   <div class="content">
      <a class="navbar-brand" href="http://epilketos.rplinformatika.my.id/index.html">
         <img class='img img-responsive' style='max-width:200px;' src="<?= get_url_file(get_pengaturan('site_logo')) ?>" alt="Logo">
      </a>
      <div class="text">
         Admin Login
      </div>
      <form action='<?= site_url('admin/auth/login') ?>' method='post' name='fmLogin' id='fmLogin' class="validate-form">
         <div class="field">
            <span class="fas fa-user"></span>
            <input type="text" id="identity" name="identity" placeholder="Username" required>
         </div>
         <div class="field">
            <span class="fas fa-lock"></span>
            <input type="password" id="password" name="password" placeholder="Password" required>
         </div>
         <button type="submit" name='submit'>Login</button>
      </form>
   </div>
</body>
</html>