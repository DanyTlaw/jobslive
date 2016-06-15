@extends('layouts.app')

@section('content')

        <!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Alle Komptenzen</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <td>Kompetenz:</td>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($competences as $key => $value)
                            <tr>
                                <td>{{ $value->name }}</td>

                                <td>


                                    {{ Form::open(array('url' => 'competence/' . $value->id, 'class' => 'pull-right')) }}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::submit('Kompetenz löschen', array('class' => 'btn btn-danger')) }}
                                    {{ Form::close() }}

                                    <a class="btn btn-small btn-success" href="{{ URL::to('competence/' . $value->id) }}">Anzeigen</a>


                                    <a class="btn btn-small btn-info" href="{{ URL::to('competence/' . $value->id . '/edit') }}">Bearbeiten</a>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                    <a class="btn btn-small btn-primary" href="{{ URL::to('competence/create') }}">Kompetenz hinzufügen</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection