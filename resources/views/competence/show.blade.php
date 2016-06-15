@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="co-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Kompetenzen</div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td>Kompetenz:</td>
                                <td>{{ $competence->name }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection