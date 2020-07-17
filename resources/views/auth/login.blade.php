<!-- @extends('layouts.app') -->
@extends('layouts.include')
@section('content')

<section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-4 login-sec">
		    <h2 class="text-center">Administrateur</h2>
		    <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf


  <div class="form-group">
    <label for="email" class="text-uppercase">EMAIL</label>
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="">
    @error('email')
   <span class="invalid-feedback" role="alert">
   <strong>{{ $message }}</strong>
   </span>
    @enderror
  </div>

  <div class="form-group">
    <label for="password" class="text-uppercase">MOT DE PASSE</label>
    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    @error('password')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
     @enderror
</div>


    <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      <small>Se rappeler de moi</small>
    </label>
    <button type="submit" class="btn btn-btn ARMELLE">SOUMETTRE</button>
    @if (Route::has('password.request'))
    <a class="btn btn-link" href="{{ route('password.request') }}">
    {{ __('Mot de passe oublier?') }}
    </a>
     @endif
  </div>

</form>
<!-- <div class="copy-text">Created with <i class="fa fa-heart"></i> by <a href="http://grafreez.com">Grafreez.com</a></div> -->
		</div>
		<div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="image/sourire.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>GestCarte</h2>
            <p>L'application de gestion des Cartes des étudiants de NAZI BONI</p>
        </div>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="image/diplome.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>LA REUSSITE</h2>
            <p>Notre priorité</p>
        </div>
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="image/garcon.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>L'excellence </h2>
            <p>Notre devise</p>
        </div>
    </div>
  </div>
            </div>

		</div>
	</div>
</div>
</section>
@endsection
