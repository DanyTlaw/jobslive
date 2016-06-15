@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Profil bearbeiten</div>
				<div class="panel-body">
					{!! Form::model($profile, ['method' => 'PATCH', 'route' => ['profile.update', $profile->id] ],array('class' => 'form-inline')) !!}

					<div class="form-group">
						<div class="dropdown"> 
							{!! Form::Label('title', 'Anrede') !!}
							{!! Form::select('title', array('Herr' => 'Herr', 'Frau' => 'Frau'), null, array('class' => 'form-control')) !!}
						</div>
					</div>

					<div class="form-group">
						{!! Form::Label('first_name', 'Vorname') !!} </br>
						{!! Form::Text('first_name',null, array('class' => 'form-control'))!!}
					</div>

					<div class="form-group">
						{!! Form::Label('last_name', 'Nachname') !!} </br>
						{!! Form::Text('last_name', null, array('class' => 'form-control')) !!}
					</div>

					<div class="form-group">
						{!! Form::Label('place', 'Ort') !!} </br>
						{!! Form::Text('place',null, array('class' => 'form-control'))!!}
					</div>

					<div class="form-group">
						{!! Form::Label('street', 'Strasse') !!} </br>
						{!! Form::Text('street',null, array('class' => 'form-control'))!!}
					</div>

					<div class="form-group">
						{!! Form::Label('zip', 'PLZ') !!} </br>
						{!! Form::Text('zip',null, array('class' => 'form-control'))!!}
					</div>

					<div class="form-group">
						{!! Form::Label('birthyear', 'Jahrgang') !!} </br>
						{!! Form::Text('birthyear',null, array('class' => 'form-control'))!!}
					</div>

					<div class="form-group">
						{!! Form::Label('nationality', 'Nationiltät') !!} </br>
						{!! Form::Text('nationality',null, array('class' => 'form-control', 'caption' => 'Schweiz' ))!!}
					</div>

					<div class="form-group">
						{!! Form::Label('tel', 'Tel-Nr.') !!} </br>
						{!! Form::Text('tel',null, array('class' => 'form-control'))!!}
					</div>

					<div class="form-group">
						{!! Form::submit('Profil speichern', array('class' => 'btn btn-primary')) !!}
					</div>

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection