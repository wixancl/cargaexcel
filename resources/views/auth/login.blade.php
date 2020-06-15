@extends('layouts.app3')

@section('content')
<div class="container">

						<form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
							{{ csrf_field() }}

							<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">



							
									<input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Ingrese su RUN" name="email" required autofocus>

									<!--@if ($errors->has('email')) -->
										<span class="help-block">
											<strong><!-- {{ $errors->first('email') }} --></strong>
										</span>
									<!-- @endif -->
								
							</div>


							<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

									<input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Contraseña" name="password" required>

									@if ($errors->has('password'))
										<span class="help-block">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
									@endif
								
							</div>
							<br>
							
							<div class="form-group">
								<div class="col-md-8 col-md-offset-4">
									<button type="submit" class="btn btn-primary">
										Acceder
									</button>					
								</div>
							</div>
						</form>

@endsection
