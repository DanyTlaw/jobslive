@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="co-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Berufserfahrung</div>
				<div class="panel-body">
					<table class="table">
						<tr>
							<td>Stellenbeschreibung:</td>
							<td>{{ $jobExperience->job_name }}</td>
						</tr>
						<tr>
							<td>Position:</td>
							<td>{{ $jobExperience->position }}</td>
						</tr>
						<tr>
							<td>Anstellungsart:</td>
							<td>{{ $jobExperience->employment }}</td>
						</tr>
						<tr>
							<td>Arbeitgeber:</td>
							<td>{{ $jobExperience->employer }}</td>
						</tr>
						<tr>
							<td>Branche:</td>
							<td>{{ $jobExperience->business }}</td>
						</tr>
						<tr>
							<td>Arbeitsort:</td>
							<td>{{ $jobExperience->work_place }}</td>
						</tr>
						<tr>
							<td>Land:</td>
							<td>{{ $jobExperience->country }}</td>
						</tr>
						<tr>
							<td>Zeitraum von:</td>
							<td>{{ $jobExperience->start_month }} {{ $jobExperience->start_year }}</td>
						</tr>
						<tr>
							<td>Zeitraum bis:</td>
							<td>{{ $jobExperience->end_month }} {{ $jobExperience->end_year }}</td>
						</tr>
						<tr>
							<td>Beschreibung:</td>
							<td>{{ $jobExperience->description }}</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection