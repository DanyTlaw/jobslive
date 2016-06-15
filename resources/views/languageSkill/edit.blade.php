@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Sprachkentnisse erfassen</div>
                    <div class="panel-body">
                        <!-- Start der Form zum erfassen einer Sprache -->
                        {!! Form::model($languageSkill, ['method' => 'PATCH', 'route' => ['languageSkill.update', $languageSkill->id] ],array('class' => 'form-inline')) !!}


                        <div class="form-group">
                            {!! Form::Label('name', 'Sprache') !!} </br>
                            {!! Form::Text('name',null, array('class' => 'form-control'))!!}
                        </div>

                        <div class="form-group">
                            {!! Form::Label('knowledge', 'Kenntnisse der Sprache (schlecht - Muttersprache)') !!} </br>
                            {!! Form::Text('knowledge',null, array('class' => 'form-control'))!!}
                        </div>


                        <div class="form-group">
                            {!! Form::submit('Sprache speichern', array('class' => 'btn btn-primary')) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection