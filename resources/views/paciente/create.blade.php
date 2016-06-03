@extends('layouts.app')

@section('htmlheader_title')
	Adicionar pacientes
@endsection
@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Pacientes</div>
					<div class="panel-body">
					<!-- 'order', 'dni', 'deliver_date', 'globulos_rojos', 'hematrocito','hemoglobina', 'vcm', 'hbcm', 'chbcm', 'vsg', '1rahora','1rahora', -->
						{!! Form::open(array('url' => 'paciente')) !!}
						<div>
							{!! Form::label('dni','DNI', ['class'=>'control-label']) !!}
							{!! Form::text('dni',null, ['class'=>'form-control']) !!}			
						</div>

						<div>
							{!! Form::label('first_name','Nombre', ['class'=>'control-label']) !!}
							{!! Form::text('first_name',null, ['class'=>'form-control']) !!}			
						</div>

						<div>
							{!! Form::label('last_name','Apellido', ['class'=>'control-label']) !!}
							{!! Form::text('last_name',null, ['class'=>'form-control']) !!}			
						</div>
						<div>
							{!! Form::label('gender','Genero', ['class'=>'control-label']) !!}
							<ul>
								<li>
									Masculino
									{!! Form::radio('gender',1,true) !!}
								</li>
								<li>
									Femenino
									{!! Form::radio('gender',0) !!}
								</li>
							</ul>
						</div>
						<div>
							{!! Form::label('age','Edad', ['class'=>'control-label']) !!}
							{!! Form::number('age',0, ['class'=>'form-control']) !!}			
						</div>
						{!! Form::submit('Guardar datos',['class'=>'btn btn-primary']) !!}
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
