@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Berufserfahrung bearbeiten</div>
				<div class="panel-body">
					<!-- Start der Form zum erfassen einer Berufserfahrung -->
					{!! Form::model($jobExperience, ['method' => 'PATCH', 'route' => ['jobExperience.update', $jobExperience->id] ],array('class' => 'form-inline')) !!}

					<div class="form-group">
						{!! Form::Label('job_name', 'Stellenbezeichnung') !!} </br>
						{!! Form::Text('job_name',null, array('class' => 'form-control'))!!}
					</div>

					<div class="form-group">
						<div class="dropdown"> 
							{!! Form::Label('position', 'Position') !!}
							{!! Form::select('position', array('Führungsposition' => 'Führungsposition', 'Fachverantwortung' => 'Fachverantwortung', 'Mitarbeiter' => 'Mitarbeiter'), null, array('class' => 'form-control')) !!}
						</div>
					</div>

					<div class="form-group">
						<div class="dropdown"> 
							{!! Form::Label('employment', 'Anstellungsart') !!}
							{!! Form::select('employment', array('Festanstellung' => 'Festanstellung', 'Temporär' => 'Temporär', 'Freelance' => 'Freelance', 'Praktikum' => 'Praktikum', 'Lehrstelle' => 'Lehrstelle', 'Nebenerwerb' => 'Nebenerwerb'), null, array('class' => 'form-control')) !!}
						</div>
					</div>

					<div class="form-group">
						{!! Form::Label('employer', 'Arbeitgeber') !!} </br>
						{!! Form::Text('employer',null, array('class' => 'form-control'))!!}
					</div>

					<div class="form-group">
						<div class="dropdown"> 
							{!! Form::Label('business', 'Brance') !!}
							{!! Form::select('business', array('Finanzen / Verwaltung' => 'Finanzen / Verwaltung', 'Tourismus / Gastronomie' => 'Tourismus / Gastronomie', 'etc' => 'etc'), null, array('class' => 'form-control')) !!}
						</div>
					</div>

					<div class="form-group">
						{!! Form::Label('work_place', 'Arbeitsort') !!} </br>
						{!! Form::Text('work_place',null, array('class' => 'form-control'))!!}
					</div>

					<div class="form-group">
						<div class="dropdown"> 
							{!! Form::Label('country', 'Land') !!}
							{!! Form::select('country', array('Schweiz' => 'Schweiz', 'Deutschland' => 'Deutschland', 'Frankreich' => 'Frankreich', 'etc' => 'etc'), null, array('class' => 'form-control')) !!}
						</div>
					</div>

					<div class="form-group">
						<div class="dropdown"> 
							{!! Form::Label('start_month', 'Zeitraum von') !!}
							{!! Form::select('start_month', array('Januar' => 'Januar', 'Februar' => 'Februar', 'März' => 'März', 'April' => 'April', 'Mai' => 'Mai', 'Juni' => 'Juni' , 'Juli' => 'Juli', 'August' => 'August', 'September' => 'September', 'Oktoboer' => 'Oktober','November' => 'November','Dezember' => 'Dezember'), null, array('class' => 'form-control')) !!}
						</div>
					</div>

					<div class="form-group">
						{!! Form::Label('start_year', 'Jahr (JJJJ)') !!} </br>
						{!! Form::Text('start_year',null, array('class' => 'form-control'))!!}
					</div>

					<div class="form-group">
						<div class="dropdown"> 
							{!! Form::Label('end_month', 'Zeitraum bis') !!}
							{!! Form::select('end_month', array('Januar' => 'Januar', 'Februar' => 'Februar', 'März' => 'März', 'April' => 'April', 'Mai' => 'Mai', 'Juni' => 'Juni' , 'Juli' => 'Juli', 'August' => 'August', 'September' => 'September', 'Oktoboer' => 'Oktober','November' => 'November','Dezember' => 'Dezember'), null, array('class' => 'form-control')) !!}
						</div>
					</div>

					<div class="form-group">
						{!! Form::Label('end_year', 'Jahr (JJJJ)') !!} </br>
						{!! Form::Text('end_year',null, array('class' => 'form-control'))!!}
					</div>

					<div class="form-group">
						{!! Form::checkbox('until_now', 'value', false) !!}
						{!! Form::Label('until_now', 'Bis jetzt dort gearbeitet') !!} 
					</div>

					<div class="form-group">
						{!! Form::Label('description', 'Beschreibung') !!}
						{!! Form::Textarea('description', null, array('class' => 'form-control'))  !!}
					</div>

					<div class="form-group">
						{!! Form::submit('Berufserfahrung speichern', array('class' => 'btn btn-primary')) !!}
					</div>
					
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection