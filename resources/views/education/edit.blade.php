@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Ausbildung bearbeiten</div>
                    <div class="panel-body">
                        <!-- Start der Form zum erfassen einer Ausbildung -->
                        {!! Form::model($education, ['method' => 'PATCH', 'route' => ['education.update', $education->id] ],array('class' => 'form-inline')) !!}

                        <div class="form-group">
                            {!! Form::Label('title', 'Ausbildungsbezeichnung') !!} </br>
                            {!! Form::Text('title',null, array('class' => 'form-control'))!!}
                        </div>

                        <div class="form-group">
                            <div class="dropdown">
                                {!! Form::Label('degree', 'Auszeichnung') !!}
                                {!! Form::select('degree', array('Diplom' => 'Diplom', 'Berfusmatur' => 'Berufsmater', 'Matur' => 'Matur', 'Bachelor' => 'Bachelor', 'Master' => 'Master'), null, array('class' => 'form-control')) !!}
                            </div>
                        </div>


                        <div class="form-group">
                            {!! Form::Label('subject', 'Fachrichtung (optional)') !!} </br>
                            {!! Form::Text('subject',null, array('class' => 'form-control'))!!}
                        </div>


                        <div class="form-group">
                            {!! Form::Label('school', 'Name der Schule') !!} </br>
                            {!! Form::Text('school',null, array('class' => 'form-control'))!!}
                        </div>

                        <div class="form-group">
                            {!! Form::Label('place', 'Ort') !!} </br>
                            {!! Form::Text('place',null, array('class' => 'form-control'))!!}
                        </div>

                        <div class="form-group">
                            <div class="dropdown">
                                {!! Form::Label('country', 'Land') !!}
                                {!! Form::select('country', array('Schweiz' => 'Schweiz', 'Deutschland' => 'Deutschland', 'Frankreich' => 'Frankreich', 'etc' => 'etc'), null, array('class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::Label('year', 'Jahr (JJJJ)') !!} </br>
                            {!! Form::Text('year',null, array('class' => 'form-control'))!!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Ausbildung speichern', array('class' => 'btn btn-primary')) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection