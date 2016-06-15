@extends('layouts.app')

@section('content')

<!-- Banner section -->
<div class="container banner">
    <div class="row">

	    <div class="inserieren">
	    	<h1>Mitarbeiter finden ganz einfach!</h1>
	    	<h2>Inserate puplizieren</h2>
	    	<button class="btn btn-info btn-lg">Jetzt Inserieren</button>
	    </div>	
    </div>
</div>

<!-- Package section-->

<div class="container">
	<div class="row">
		<div class="angeboteText">
			<h1>Inserations-Angebote</h1>
			<h2>Bei uns bekommen Sie die besten Angebote zu fairen Preisen!</h2>
		</div>

		<div class="col-md-12">
			<div class="col-md-4">
					<div class="angebot" markiert="0">
						<div class="angebot-header">
							<h2>2 WOCHEN</h2>
						</div>
						<div class="angebot-price">
							<h2>140.-</h2>
							<p>Ihre Inserate werden für 2 Wochen auf Jobslive Verfügbar sein</p>
						</div>
					</div>			
			</div>
			<div class="col-md-4">
					<div class=" angebot" markiert="1">
						<div class="angebot-header">
							<h2>3 WOCHEN</h2>
						</div>
						<div class="angebot-price">
							<h2>240.-</h2>
							<p>Ihre Inserate werden für 3 Wochen auf Jobslive Verfügbar sein</p>
						</div>
					</div>
				
			</div>
			<div class="col-md-4">
					<div class=" angebot" markiert="0">
						<div class="angebot-header">
							<h2>2 Monate</h2>
						</div>
						<div class="angebot-price">
							<h2>520.-</h2>
							<p>Ihre Inserate werden für 2 Monate auf Jobslive Verfügbar sein</p>
						</div>
					</div>
				
			</div>
		</div>
	</div>

	<!-- Upselling section-->
	<div class="col-md-12" style="margin-top:40px; margin-bottom: 100px;">
		<div class="angeboteText">
			<h2>Zusatzleistungen</h2>
		</div>
		<div class="panel panel-default" >
			<div class="panel-body">				
				<div class="alert alert-info" style="text-align: center; height: 50px;">
					<div class="col-md-1">
						<input type="checkbox">
					</div>
					<div class="col-md-11">
						<p>Aktualisierung (alle 7 Tage) + Fr. x (heist Job auf oberste Position)</p>
					</div>
				</div>
				<div class="alert alert-info" style="text-align: center; height: 50px;">
					<div class="col-md-1">
						<input type="checkbox">
					</div>
					<div class="col-md-11">
						<p>Sponsored (Stelle permanent auf oberster Position)</p>
					</div>
				</div>
				<div class="alert alert-info" style="text-align: center; height: 50px;">
					<div class="col-md-1">
						<input type="checkbox">
					</div>
					<div class="col-md-11">
						<p>Automatische Reaktivierung nach Ablauf (reduzierter Reaktivierungspreis)</p>
					</div>
				</div>					
			</div>
		</div>
		<div class="angebotButton">
			<button class="btn btn-success btn-lg">Angebot kaufen</button>
		</div>
	</div>

</div>






@endsection