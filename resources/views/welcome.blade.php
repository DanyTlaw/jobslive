@extends('layouts.app')

@section('content')

<!-- Banner section -->
<div class="container banner">
    <div class="row">


        <div class="searchsection form-group">
            <label class="searchlabel">Finden Sie Ihren Job:</label>
            <div class="col-md-12" style="padding-left: 0px !important;">
                <div class="col-md-8" style="padding-left: 0px !important;">
            
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-4">
                    <label class="searchlabel"></label>
                    <button class="button btn-info btn-lg">Los gehts!</button>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Jobs -->
<div class="container">
    <div class="row">
    <div class="col-md-12">
        <div class="col-md-4 jobrubrik">
            <h3>Kaufmännisch</h3>
            <p><span class="glyphicon glyphicon-play"> Administration/HR/Consulting/CEO</p>
            <p><span class="glyphicon glyphicon-play"> Finanzen/Treuhand/Immobilien</p>
            <p><span class="glyphicon glyphicon-play"> Banking/Versicherungswesen</p>
            <p><span class="glyphicon glyphicon-play"> Einkauf/Logistik/Trading</p>
            <p><span class="glyphicon glyphicon-play"> Marketing/Kommunikation/Redaktion</p>
            <p><span class="glyphicon glyphicon-play"> Verkauf/Kundendient/Innendienst</p>            
        </div>
        <div class="col-md-4 jobrubrik">
            <h3>Technisch</h3>
            <p><span class="glyphicon glyphicon-play"> Informatik/Telekommunikation</p>
            <p><span class="glyphicon glyphicon-play"> Chemie/Pharma/Biotechnologie</p>
            <p><span class="glyphicon glyphicon-play"> Elektronik/Technik/Uhren</p>
            <p><span class="glyphicon glyphicon-play"> Maschinen-/Anlagenbau/Produktion</p>
            <p><span class="glyphicon glyphicon-play"> Bau/Architektur/Engineering</p>
            <p><span class="glyphicon glyphicon-play"> Fahrzeuge/Handwerk/Lager/Transport</p>
        </div>
        <div class="col-md-4 jobrubrik">
            <h3>Dienstleistung</h3>
            <p><span class="glyphicon glyphicon-play"> Medizin/Pflege/Therapie</p>
            <p><span class="glyphicon glyphicon-play"> Verwaltung/Bildung/Soziales</p>
            <p><span class="glyphicon glyphicon-play"> Gastronomie/Lebensmittel/Tourismus</p>
            <p><span class="glyphicon glyphicon-play"> Grafik/Typografie/Druck</p>
            <p><span class="glyphicon glyphicon-play"> Bewachung/Polizei/Zoll/Rettung</p>
            <p><span class="glyphicon glyphicon-play"> Sport/Wellness/Kultur</p>
        </div>
    </div>
    </div>
</div>
@endsection
