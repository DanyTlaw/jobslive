@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Kompetenz erfassen</div>
                    <div class="panel-body">
                        <!-- Start der Form zum erfassen einer Kompetenz -->
                        {!! Form::model($competence, ['method' => 'PATCH', 'route' => ['competence.update', $competence->id] ],array('class' => 'form-inline')) !!}

                        <div class="form-group">
                            {!! Form::Label('name', 'Sprache') !!} </br>
                            {!! Form::Text('name',null, array('class' => 'form-control'))!!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Kompetenz speichern', array('class' => 'btn btn-primary')) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection