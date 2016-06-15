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
                <div class="panel-heading">Alle Ausbildungen</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <td>Ausbildungstitel</td>
                            <td>Akademischer Grad</td>
                            <td>Name der Schule</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($educations as $key => $value)
                            <tr>
                                <td>{{ $value->title }}</td>
                                <td>{{ $value->degree }}</td>
                                <td>{{ $value->school }}</td>

                                <td>

                                    {{ Form::open(array('url' => 'education/' . $value->id, 'class' => 'pull-right')) }}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::submit('Berufserfahrung löschen', array('class' => 'btn btn-danger')) }}
                                    {{ Form::close() }}

                                    <a class="btn btn-small btn-success" href="{{ URL::to('education/' . $value->id) }}">Anzeigen</a>


                                    <a class="btn btn-small btn-info" href="{{ URL::to('education/' . $value->id . '/edit') }}">Bearbeiten</a>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <a class="btn btn-small btn-primary" href="{{ URL::to('education/create') }}">Ausbildung hinzufügen</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection