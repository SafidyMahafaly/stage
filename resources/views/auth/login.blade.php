<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('login.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
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
          <form class="forms_form">

              <div class="forms_field">
                <input type="text" placeholder="Full Name" class="forms_field-input" required />
              </div>
              <div class="forms_field">
                <input type="email" placeholder="Email" class="forms_field-input" required />
              </div>
              <div class="forms_field">
                <input type="password" placeholder="Password" class="forms_field-input" required />
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
