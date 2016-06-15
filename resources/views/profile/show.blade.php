@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Profil Ansicht</div>
				<div class="panel-body">
					<div class="col-md-8">
						<div class="panel panel-default">
							<div class="panel-heading">Allgemeine Benutzerdaten</div>
								<div class="panel-body">
								<div class="col-md-7">								
									<!-- Anezige "Form" für den Profil Eintrag -->
									<h3>Benutzername: {{ $user->name }}</h3>
									<table class="table">
									<tr>
										<td>Anrede:</td>
										<td>{{ $profile->title }}</td>
									</tr>
									<tr>
										<td>Vorname:</td>
										<td>{{ $profile->first_name}}</td>
									</tr>
									<tr>
										<td>Nachname:</td>
										<td>{{ $profile->last_name}}</td>
									</tr>
									<tr>
										<td>Ort:</td>
										<td>{{ $profile->place}}</td>
									</tr>
									<tr>
										<td>Strasse:</td>
										<td>{{ $profile->street}}</td>
									</tr>
									<tr>
										<td>Postleitzahl</td>
										<td>{{ $profile->zip}}</td>
									</tr>
									<tr>
										<td>Jahrgang</td>
										<td>{{ $profile->birthyear}}</td>
									</tr>
									<tr>
										<td>Nationalität</td>
										<td>{{ $profile->nationality}}</td>
									</tr>
									<tr>
										<td>Tel-Nr.</td>
										<td>{{ $profile->tel}}</td>
									</tr>
									<tr>
										<td><a href="{{ url('profile/' . $profile->id .' /edit')}}"> <button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Bearbeiten</button></a></td>
									</tr>																							
									</table>
								</div>
								<div class="col-md-5">
									<div class="panel panel-default">
										<div class="panel-body">
											<h3>Profilbild</h3>
											@if($profile_picture)
											@foreach($profile_picture as $picture)
												<img src="{{ URL::to('/') }}/uploads/{{ $user->id}}/{{ $picture->filename }}" style="width:100%;height:300px;">
											@endforeach
											@endif
											<br></br>
											{!! Form::open(array('action' => 'FileController@handleUpload', 'files' => true)) !!}
												{!! Form::file('file') !!}
												{!! Form::hidden('type', 'profile_picture') !!}
												{!! Form::token() !!}
												{!! Form::submit('Upload') !!}
											{!! Form::close() !!}
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
					<div class="col-md-4">
						<div class="panel panel-default">
							<div class="panel-heading">Informationen</div>
							<div class="panel-body">
								<h4>Profil Fortschritt</h4>
								<div class="progress">
								  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
								    20%
								  </div>
								</div>
								<p>Ein Vollständiges Profil macht einen guten Eindruck und erhöht ihre Chancen.</p>
								<ul>
									<li>Lebenslauf</li>
									<li>Ausbildungen</li>
									<li>Berufserfahrung</li>
									<li>Kompetenzen</li>
								</ul>
							</div>	
						</div>
					</div>
					<div class="col-md-8">
						<div class="panel panel-default">
							<div class="panel-heading">Berufserfahrungen</div>
							<div class="panel-body">
								@include('JobExperience.create')

								<!-- Here comes the index as a partials -->
								@if ($hasJobExperiences)
									<p>Hier sehen Sie alle Ihre Berufserfahrungen:</p>
									<a class="btn btn-small btn-primary" href="{{ url('jobExperience') }}"><span class="glyphicon glyphicon-th-list"></span> Berufserfahrungen anzeigen</a>
								@endif
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="panel panel-default">
							<div class="panel-heading">Ausbildungen</div>
							<div class="panel-body">
								@include('education.create')
								<!-- Here comes the index as a partials -->
								@if ($hasEducations)
									<p>Hier sehen Sie alle Ihre Ausbildungen:</p>
									<a class="btn btn-small btn-primary" href="{{ url('education') }}"><span class="glyphicon glyphicon-th-list"></span> Ausbildungen anzeigen</a>
								@endif
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="panel panel-default">
							<div class="panel-heading">Sprachkenntnisse</div>
							<div class="panel-body">
								@include('languageSkill.create')
								<!-- Here comes the index as a partials -->
								@if ($hasLanguageSkills)
									<p>Hier sehen Sie alle Ihre Sprachkenntnisse:</p>
									<a class="btn btn-small btn-primary" href="{{ url('languageSkill') }}"><span class="glyphicon glyphicon-th-list"></span> Sprachkenntnisse anzeigen</a>
								@endif
							</div>
						</div>
					</div>
					</div>
					<div class="col-md-8">
						<div class="panel panel-default">
							<div class="panel-heading">Kompetenzen</div>
							<div class="panel-body">
								@include('competence.create')
								<!-- Here comes the index as a partials -->
								@if ($hasCompetences)
									<p>Hier sehen Sie alle Ihre Kompetenzen:</p>
									<a class="btn btn-small btn-primary" href="{{ url('competence') }}"><span class="glyphicon glyphicon-th-list"></span> Kompetenzen anzeigen</a>
								@endif
							</div>
						</div>
					</div>
					</div>
					<div class="col-md-8">
						<div class="panel panel-default">
							<div class="panel-heading">Dateien</div>
							<div class="panel-body">

								@foreach($files as $file)
									<li>{{ $file->filename }} {{link_to_route('deleteFile', 'Delete', [$file->id]) }}</li>							
								@endforeach

								{!! Form::open(array('action' => 'FileController@handleUpload', 'files' => true)) !!}
									{!! Form::file('file') !!}
									{!! Form::hidden('type', 'data') !!}
									{!! Form::token() !!}
									{!! Form::submit('Upload') !!}
								{!! Form::close() !!}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection