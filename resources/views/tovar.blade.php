@extends('SP.main_SP')

@section('title')
    Low kik || Католог
@endsection

@section('content')
<main class="px-3">
  <div class="modal-body p-5 pt-0">
    <form class="" method="POST">
    @csrf
      <p class="text"></p>
      <div class="form-floating mb-3">
        <input type="text" name="name" class="form-control rounded-4" id="F-form-register" placeholder="name" value="{{ $name }}">
      </div>
      <div class="form-floating mb-3">
        <input type="text" name="price" class="form-control rounded-4" id="I-form-register" placeholder="price" value="{{ $price }}">
      </div>
      <div class="form-floating mb-3">
        <input type="text" name="time" class="form-control rounded-4" id="O-form-register" placeholder="time">
        <label for="floatingInput">
          time
        </label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control rounded-4" id="O-form-register" placeholder="address">
        <label for="floatingInput">
          address
        </label>
      </div>
      <button class="w-100 mt-2 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">
        Заказать
      </button>
    </form>
  </div>
@endsection
