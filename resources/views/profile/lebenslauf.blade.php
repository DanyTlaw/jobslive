@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Profil Übersicht</div>
				<div class="panel-body">
					<!-- Panel for the user personal data-->
					<h3>Personalien</h3>
					<div class="panel panel-default">
						<div class="panel-body">
						<!-- Section for personal data-->
							<div class="col-md-8">
								<table class="table table-condensed">
									<tr>
										<td>Anrede:</td>
										<td>{{ $profile->title }}</td>
									</tr>
									<tr style="width:50%">
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
								</table>
							</div>
						<!-- Section for profile picture-->
							<div class="col-md-4">
								<div class="panel panel-default">
									<div class="panel-body">
										@foreach($profile_picture as $picture)
											<img src="{{ URL::to('/') }}/uploads/{{ $user->id}}/{{ $picture->filename }}" style="width:100%;height:300px;">
										@endforeach
									</div>
								</div>
							</div>
						</div>					
					</div>
					<!-- Panel for all educations-->
					<h3>Berufserfahrungen</h3>
					<div class="panel panel-default">
						<div class="panel-body">
							@foreach($jobExperiences as $job)
								<table class="table table-condensed">
									<tr>
										<td>Berufsbezeichnung:</td>
										<td>{{$job->job_name}}</td>
									</tr>
									<tr>
										<td>Position:</td>
										<td>{{$job->position}}</td>
									</tr>
									<tr>
										<td>Anstellungsart:</td>
										<td>{{$job->employment}}</td>
									</tr>
									<tr>
										<td>Arbeitgeber:</td>
										<td>{{$job->employer}}</td>
									</tr>
									<tr>
										<td>Branche:</td>
										<td>{{$job->business}}</td>
									</tr>
									<tr>
										<td>Arbeitsort:</td>
										<td>{{$job->work_place}}</td>
									</tr>
									<tr>
										<td>Land:</td>
										<td>{{$job->country}}</td>
									</tr>
									<tr>
										<td>Anstellungsbeginn:</td>
										<td>{{$job->start_month}} {{$job->start_year}}</td>
									</tr>
									<tr>
										<td>Anstellungsende:</td>
										<td>{{$job->end_month}} {{$job->end_year}}</td>
									</tr>
									<tr>
										<td>Beschreibung:</td>								
									</tr>
									<p>{{$job->description}}</p>
								</table>
							@endforeach
						</div>
					</div>
					<!-- Panel for educations -->
					<h3>Ausbildungen</h3>
					<div class="panel panel-default">
						<div class="panel-body">
							@foreach($educations as $edu)
								<table class="table table-condensed">
									<tr>
										<td>Ausbildungsbezeichnung:</td>
										<td>{{$edu->title}}</td>
									</tr>
									<tr>
										<td>Auszeichnung:</td>
										<td>{{$edu->degree}}</td>
									</tr>
									<tr>
										<td>Schule:</td>
										<td>{{$edu->school}}</td>
									</tr>
									<tr>
										<td>Ort:</td>
										<td>{{$edu->place}}</td>
									</tr>
									<tr>
										<td>Land:</td>
										<td>{{$edu->country}}</td>
									</tr>
									<tr>
										<td>Jahr:</td>
										<td>{{$edu->year}}</td>
									</tr>
								</table>
							@endforeach
						</div>
					</div>
					<!-- Panel for language Skills-->
					<h3>Sprachkentnisse</h3>
					<div class="panel panel-default">
						<div class="panel-body">
							<table class="table table-condensed">		
								@foreach($languageSkills as $lSkill)
									<tr>
										<td>{{$lSkill->name}}</td>
										<td>{{$lSkill->knowledge}}</td>
									</tr>
								@endforeach
							</table>								
						</div>
					</div>
					<!--  Panel for competences -->
					<h3>Kompetenzen</h3>
					<div class="panel panel-default">
						<div class="panel-body">
							<table class="table table-condensed>">
								@foreach($competences as $comp)
									<tr>
										<td>{{$comp->name}}</td>
									</tr>
								@endforeach
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection