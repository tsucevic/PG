
<!DOCTYPE html>
<html >
<head>
    <title>e-Kuzis</title>

    <meta charset="UTF-8">
    <meta name="description" content="Šeraj skripte 4 free">
    <meta name="keywords" content="šer, komjuniti, fan">
    <meta name="author" content="Programerska grupa">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/customdark.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


</head>

<body>
  <style>
    .login input[type='email']{
      border-radius: 0.25rem;
      padding: 16px;
      padding: 1rem;
    }
    .form input[type='email']{
      width: 100%;
    }
    .login input[type='email']{
      background-color: #3b4148;
      border-bottom-left-radius: 0;
      border-top-left-radius: 0;
    }
    .form__select:hover,
    .form__select:focus,
    .login input[type='email']:focus,
    .login input[type='email']:hover{
      background-color: #434a52;
    }
    .eLogo {
      margin-top: 10px;
      width: 700px;
      height: 300px;
      line-height: 100px;
      position: static;
      display: fixed;
    }
    .form__select{
      border-radius: 0.25rem;
      padding: 16px;
      padding: 1rem;
      width: 100%;
      background-color: #3b4148;
      border-bottom-left-radius: 0;
      border-top-left-radius: 0;
      color: #666777;
      font-family: 'Roboto', sans-serif;
      font-size: 14px;
      font-size: 0.875rem;
      font-weight: 400;
    }
    .form__label{
      color: #666777;
      font-family: 'Roboto', sans-serif;
      font-size: 14px;
      font-size: 0.875rem;
      font-weight: 400;
    }
    .darkmodebutton{
      font-size: 1.3rem;
      float: right;
      margin-left: 1200px;
      margin-top: 100px;
      margin-bottom:-100px;
      position: static;
    }
  </style>
    <div class="darkmodebutton"><a href="{{url('register')}}" class="linkremove">&#9790;</a></div>


    <div class="eLogo">
        <h1 class="edit001">e-Kužiš</h1>
        <div class="maindesc">
            <h3 class="edit002">e-Kužiš je stranica za share-anje skripti za srednjoškolce<br>REGISTRIRAJ SE</h3>

        </div>
    </div>






    <body class="align">

  <div class="grid">

    <form method="POST" class="form register login">

      <div class="form__field">
        <label for="register__username"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user"></use></svg><span class="hidden">Korisničko ime</span></label>
        <input id="register__username" type="text" name="username" class="form__input" placeholder="Korisničko ime" required>
      </div>

     <div class="form__field">
        <label for="register__password"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#lock"></use></svg><span class="hidden">Lozinka</span></label>
        <input id="register__password" type="password" name="password" class="form__input" placeholder="Lozinka" required>
      </div>

      <div class="form__field">
        <label for="register__passwordConfirm"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#lock"></use></svg><span class="hidden">Potvrda lozinke</span></label>
        <input id="register__passwordConfirm" type="password" name="passwordConfirm" class="form__input" placeholder="Potvrda lozinke" required>
      </div>

      <div class="form__field">
        <label for="register__name"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user"></use></svg><span class="hidden">Ime</span></label>
        <input id="register__name" type="text" name="name" class="form__input" placeholder="Ime" required>
      </div>

      <div class="form__field">
        <label for="register__surname"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user"></use></svg><span class="hidden">Prezime</span></label>
        <input id="register__surname" type="text" name="text" class="form__input" placeholder="Prezime" required>
      </div>

      <div class="form__field">
        <label for="register__email"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user"></use></svg><span class="hidden">Email</span></label>
        <input id="register__email" type="email" name="email" class="form__input" placeholder="Email" required>
      </div>

      <div class="form__field">
        <label for="register__school"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user"></use></svg><span class="hidden">Škola</span></label>
        <input id="register__school" type="text" name="school" class="form__input" placeholder="Škola" required>
      </div>

      <div class="form__field">
        <label for="register__course"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user"></use></svg><span class="form__label">Smjer</span></label>
        <select id="register__course" class="form__input form__select">
          <option value="Ekonomist">Ekonomist</option>
          <option value="Tehničar">Tehničar</option>
        </select>
      </div>
      <div class="form__field">
        <input type="submit" value="Registriraj se" class="subcolor" style="background-color: red;">
      </div>

    </form>

    <p class="text--center">Imate račun? <a href="{{url('/darkwelcome')}}" class="edit003">Prijavi se</a> <svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="assets/images/icons.svg#arrow-right"></use></svg></p>

  </div>


  <!--OVAJ SVG DOLJE SE S INTERNETA ZA IKONE ZA REGISTER SCREEN-->
  <svg xmlns="http://www.w3.org/2000/svg" class="icons">
    <symbol id="arrow-right" viewBox="0 0 1792 1792">
      <path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z"/>
    </symbol>
    <symbol id="lock" viewBox="0 0 1792 1792">
      <path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z"/>
    </symbol>
    <symbol id="user" viewBox="0 0 1792 1792">
      <path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z"/>
    </symbol>
    <symbol id="email" viewBox="0 0 1792 1792">
      <path d="M485.211,363.906c0,10.637-2.992,20.498-7.785,29.174L324.225,221.67l151.54-132.584 c5.895,9.355,9.446,20.344,9.446,32.219V363.906z M242.606,252.793l210.863-184.5c-8.653-4.737-18.397-7.642-28.908-7.642H60.651 c-10.524,0-20.271,2.905-28.889,7.642L242.606,252.793z M301.393,241.631l-48.809,42.734c-2.855,2.487-6.41,3.729-9.978,3.729 c-3.57,0-7.125-1.242-9.98-3.729l-48.82-42.736L28.667,415.23c9.299,5.834,20.197,9.329,31.983,9.329h363.911 c11.784,0,22.687-3.495,31.983-9.329L301.393,241.631z M9.448,89.085C3.554,98.44,0,109.429,0,121.305v242.602 c0,10.637,2.978,20.498,7.789,29.174l153.183-171.44L9.448,89.085z"/>
    </symbol>
  </svg>

</body>


</body>
</html>
