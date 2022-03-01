@extends('SP.main_SP')

@section('title')
    Low kik || Регистрация
@endsection

@section('content')
<div class="modal modal-signin position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSignin">
@if(session('alert')) 
  @include('module_SP.alert')
@endif
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-5 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h2 class="fw-bold mb-0">
          Зарегистрироваться на сайте Low kik
        </h2>
      </div>
      <div class="modal-body p-5 pt-0">
        <form class="" method="POST">
        @csrf
          <p class="text"></p>
          <div class="form-floating mb-3">
            <input type="text" name="surname" class="form-control rounded-4" id="F-form-register" placeholder="Surname">
            <label for="floatingInput">
              Surname
            </label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" name="name" class="form-control rounded-4" id="I-form-register" placeholder="Name">
            <label for="floatingInput">
              Name
            </label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" name="patronymic" class="form-control rounded-4" id="O-form-register" placeholder="Patronymic">
            <label for="floatingInput">
              Patronymic
            </label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control rounded-4" id="Email-form-register" placeholder="Email">
            <label for="floatingInput">
              Email
            </label>
          </div>
          
          <div class="form-floating mb-3">
            <input type="text" name="login" class="form-control rounded-4" id="login-form-register" placeholder="login">
            <label for="floatingInput">
              Login
            </label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control rounded-4" id="password-form-register" placeholder="Password">
            <label for="floatingPassword">
              Password
            </label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" name="PasswordRepit" class="form-control rounded-4" id="password-r-form-register" placeholder="Password repit">
            <label for="floatingPassword">
              Password repit
            </label>
          </div>
          <small class="text-muted">
            Нажимая зарегистрироваться вы соглашаетесь на обработку персональных данных.
          </small>
          <button class="w-100 mt-2 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">
            Зарегистрироваться
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
