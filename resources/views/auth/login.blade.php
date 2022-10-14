<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('login.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
  * {
    box-sizing: border-box; }

  body {
    font-family: "Montserrat", sans-serif;
    font-size: 12px;
    line-height: 1em; }

  button {
    background-color: transparent;
    padding: 0;
    border: 0;
    outline: 0;
    cursor: pointer; }

  input {
    background-color: transparent;
    padding: 0;
    border: 0;
    outline: 0; }
    input[type="submit"] {
      cursor: pointer; }
    input::placeholder {
      font-size: .85rem;
      font-family: "Montserrat", sans-serif;
      font-weight: 300;
      letter-spacing: .1rem;
      color: black; }

  /**
   * Bounce to the left side
   */
  @keyframes bounceLeft {
    0% {
      transform: translate3d(100%, -50%, 0); }
    50% {
      transform: translate3d(-30px, -50%, 0); }
    100% {
      transform: translate3d(0, -50%, 0); } }

  /**
   * Bounce to the left side
   */
  @keyframes bounceRight {
    0% {
      transform: translate3d(0, -50%, 0); }
    50% {
      transform: translate3d(calc(100% + 30px), -50%, 0); }
    100% {
      transform: translate3d(100%, -50%, 0); } }

  /**
   * Show Sign Up form
   */
  @keyframes showSignUp {
    100% {
      opacity: 1;
      visibility: visible;
      transform: translate3d(0, 0, 0); } }

  /**
   * Page background
   */
  .user {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100vh;
    background: #ccc;
    background-size: cover; }
    .user_options-container {
      position: relative;
      width: 80%; }
    .user_options-text {
      display: flex;
      justify-content: space-between;
      width: 100%;
      background-color: rgba(34, 34, 34, 0.85);
      border-radius: 3px; }

  /**
   * Registered and Unregistered user box and text
   */
  .user_options-registered,
  .user_options-unregistered {
    width: 50%;
    padding: 75px 45px;
    color: #fff;
    font-weight: 300; }

  .user_registered-title,
  .user_unregistered-title {
    margin-bottom: 15px;
    font-size: 1.66rem;
    line-height: 1em; }

  .user_unregistered-text,
  .user_registered-text {
    font-size: .83rem;
    line-height: 1.4em; }

  .user_registered-login,
  .user_unregistered-signup {
    margin-top: 30px;
    border: 1px solid #ccc;
    border-radius: 3px;
    padding: 10px 30px;
    color: #fff;
    text-transform: uppercase;
    line-height: 1em;
    letter-spacing: .2rem;
    transition: background-color .2s ease-in-out, color .2s ease-in-out; }
    .user_registered-login:hover,
    .user_unregistered-signup:hover {
      color: rgba(34, 34, 34, 0.85);
      background-color: #ccc; }

  /**
   * Login and signup forms
   */
  .user_options-forms {
    position: absolute;
    top: 50%;
    left: 30px;
    width: calc(50% - 30px);
    min-height: 420px;
    background-color: #fff;
    border-radius: 3px;
    box-shadow: 2px 0 15px rgba(0, 0, 0, 0.25);
    overflow: hidden;
    transform: translate3d(100%, -50%, 0);
    transition: transform .4s ease-in-out; }
    .user_options-forms .user_forms-login {
      transition: opacity .4s ease-in-out, visibility .4s ease-in-out; }
    .user_options-forms .forms_title {
      margin-bottom: 45px;
      font-size: 1.5rem;
      font-weight: 500;
      line-height: 1em;
      text-transform: uppercase;
      color: rgb(129,140,248);
      letter-spacing: .1rem; }
    .user_options-forms .forms_field:not(:last-of-type) {
      margin-bottom: 20px; }
    .user_options-forms .forms_field-input {
      width: 100%;
      border-bottom: 1px solid black;
      padding: 6px 20px 6px 6px;
      font-family: "Montserrat", sans-serif;
      font-size: 1rem;
      font-weight: 300;
      color: gray;
      letter-spacing: .1rem;
      transition: border-color .2s ease-in-out; }
      .user_options-forms .forms_field-input:focus {
        border-color: gray; }
    .user_options-forms .forms_buttons {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 35px; }
      .user_options-forms .forms_buttons-forgot {
        font-family: "Montserrat", sans-serif;
        letter-spacing: .1rem;
        color: black;
        text-decoration: underline;
        transition: color .2s ease-in-out; }
        .user_options-forms .forms_buttons-forgot:hover {
          color: #b3b3b3; }
      .user_options-forms .forms_buttons-action {
        background-color: rgb(129,140,248);
        border-radius: 3px;
        padding: 10px 35px;
        font-size: 1rem;
        font-family: "Montserrat", sans-serif;
        font-weight: 300;
        color: #fff;
        text-transform: uppercase;
        letter-spacing: .1rem;
        transition: background-color .2s ease-in-out; }
        .user_options-forms .forms_buttons-action:hover {
          background-color: rgb(129,140,248); }
    .user_options-forms .user_forms-signup,
    .user_options-forms .user_forms-login {
      position: absolute;
      top: 70px;
      left: 40px;
      width: calc(100% - 80px);
      opacity: 0;
      visibility: hidden;
      transition: opacity .4s ease-in-out, visibility .4s ease-in-out, transform .5s ease-in-out; }
    .user_options-forms .user_forms-signup {
      transform: translate3d(120px, 0, 0); }
      .user_options-forms .user_forms-signup .forms_buttons {
        justify-content: flex-end; }
    .user_options-forms .user_forms-login {
      transform: translate3d(0, 0, 0);
      opacity: 1;
      visibility: visible; }

  /**
   * Triggers
   */
  .user_options-forms.bounceLeft {
    animation: bounceLeft 1s forwards; }
    .user_options-forms.bounceLeft .user_forms-signup {
      animation: showSignUp 1s forwards; }
    .user_options-forms.bounceLeft .user_forms-login {
      opacity: 0;
      visibility: hidden;
      transform: translate3d(-120px, 0, 0); }

  .user_options-forms.bounceRight {
    animation: bounceRight 1s forwards; }

  /**
   * Responsive 990px
   */
  @media screen and (max-width: 990px) {
    .user_options-forms {
      min-height: 350px; }
      .user_options-forms .forms_buttons {
        flex-direction: column; }
      .user_options-forms .user_forms-login .forms_buttons-action {
        margin-top: 30px; }
      .user_options-forms .user_forms-signup,
      .user_options-forms .user_forms-login {
        top: 40px; }
    .user_options-registered,
    .user_options-unregistered {
      padding: 50px 45px; } }

</style>
<body>
    <!--
  This was created based on the Dribble shot by Deepak Yadav that you can find at https://goo.gl/XRALsw
  I'm @hk95 on GitHub. Feel free to message me anytime.
-->

<section class="user">
    <div class="user_options-container">
      <div class="user_options-text">
        <div class="user_options-unregistered">
          <h2 class="user_unregistered-title">Bienvenue</h2>
          <p class="user_unregistered-text">Veillez entre votre email et votre mot de passe pour vous conecter.Pour crée un compte clicque sur :</p>
          <button class="user_unregistered-signup" id="signup-button">S'inscrire</button>
        </div>

        <div class="user_options-registered">
          <h2 class="user_registered-title">Vous avez un compte?</h2>
          <p class="user_registered-text">Si vous avez un compte veillez cliquer sur le boutton login.</p>
          <button class="user_registered-login" id="login-button">Connexion</button>
        </div>
      </div>
      <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="user_options-forms" id="user_options-forms">
        <div class="user_forms-login">
          <h2 class="forms_title">CONNEXION</h2>
          <form class="forms_form">

              <div class="forms_field">
                <input type="email" name="email" :value="old('email')"  placeholder="Email" class="forms_field-input" required autofocus />
                {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}
                {{-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}
              </div>
              <div class="forms_field">
                <input type="password" name="password" placeholder="Password" class="forms_field-input" required />
              </div>

            <div class="forms_buttons">
              <button type="button" class="forms_buttons-forgot">Mots de passe oublié?</button>
              <input type="submit" value="Se Connecter" class="forms_buttons-action">
            </div>
          </form>
          </form>
        </div>
        <div class="user_forms-signup">
          <h2 class="forms_title">INSCRIPTION</h2>
          <form method="POST" action="{{ route('register') }}" style="margin-top:-30px">
            @csrf
              <div class="forms_field">
                <input type="text" placeholder="Nom" name="name" class="forms_field-input" required />
              </div>
              <div class="forms_field">
                <input type="email" placeholder="Email" name="email" class="forms_field-input" required />
              </div>
              <div class="forms_field">
                <input type="password" placeholder="Entre votre mot de passe" name="password" class="forms_field-input" required />
              </div>
              <div class="forms_field">
                <input type="password" placeholder="Confirmer votre mot de passe" name="password_confirmation" class="forms_field-input" required />
              </div>

            <div class="forms_buttons">
              <input type="submit" value="Sign up" class="forms_buttons-action">
            </div>
        </form>
        </div>
      </div>
    </div>
  </section>

<script>
    const signupButton = document.getElementById('signup-button'),
    loginButton = document.getElementById('login-button'),
    userForms = document.getElementById('user_options-forms')

/**
 * Add event listener to the "Sign Up" button
 */
signupButton.addEventListener('click', () => {
  userForms.classList.remove('bounceRight')
  userForms.classList.add('bounceLeft')
}, false)

/**
 * Add event listener to the "Login" button
 */
loginButton.addEventListener('click', () => {
  userForms.classList.remove('bounceLeft')
  userForms.classList.add('bounceRight')
}, false)
</script>
</body>
</html>
