@extends('_master')
	
	@section('title')
		Reportes
	@stop

	@section('content')
		<h1 id="registro"> Reporte </h1>
		{!!Form::open(array('url'=>'/reportes'))!!}
			{!!Form::label('date1','Ingresa la fecha inicial:')!!}
			{!! Form::input('date1', 'dob', date('d-m-Y'), ['class' => 'form-control', 'id' => 'dob', 'data-date-format' => "dd-mm-yyyy"]) !!}
			</br>
			{!!Form::label('date2','Ingresa la fecha final:')!!}
			{!! Form::input('date2', 'dob', date('d-m-Y'), ['class' => 'form-control', 'id' => 'dob', 'data-date-format' => "dd-mm-yyyy"]) !!}
			</br>
			{!!Form::label('usuario','Usuarios:')!!}
            {!!Form::select('usuario', ['all'=>'Todos'] + $users, ['class' => 'form-control'])!!}
        	</br></br>
        	{!!Form::submit('Crear Reporte', ['class'=> 'btn btn-info form-control'])!!}
		{!!Form::close()!!}
            
	@stop

@stop