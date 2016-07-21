@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-xs-8 col-xs-offset-2 panel panel-default panel-body">
		<h2><span class="label label-primary">Iniciar Sesion</span></h2>
		<hr>
			{!! Form::open(['route' => 'auth.login', 'method' => 'POST']) !!}
				
				<img src="{{ asset('img/login_icon.png') }}" alt=""><br>

				<div class="form-group">
					<input class="form-control" type="text" name="name" placeholder="Ingrese su Usuario" required>
				</div>
				<div class="form-group">
					<input class="form-control" type="password" name="password" placeholder="Ingrese su Contraseña" required>
				</div>
				<div class="form-group">
					<input type="submit" name="login" value="Entrar" class="form-control btn-default btn-personal">
				</div>
			{!! Form::close() !!}	
		</div>
	</div>
@endsection