@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="co-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Sprachkenntnisse</div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td>Sprache:</td>
                                <td>{{ $languageSkill->name }}</td>
                            </tr>
                            <tr>
                                <td>Akademischer Grad</td>
                                <td>{{ $languageSkill->knowledge }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection