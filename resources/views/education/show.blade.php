@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="co-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Ausbildung</div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td>Ausbildungstitel:</td>
                                <td>{{ $education->title }}</td>
                            </tr>
                            <tr>
                                <td>Akademischer Grad</td>
                                <td>{{ $education->degree }}</td>
                            </tr>
                            <tr>
                                <td>Fachrichtung:</td>
                                <td>{{ $education->subject }}</td>
                            </tr>
                            <tr>
                                <td>Name der Schule:</td>
                                <td>{{ $education->school }}</td>
                            </tr>
                            <tr>
                                <td>Ort (Schule):</td>
                                <td>{{ $education->place }}</td>
                            </tr>
                            <tr>
                                <td>Land (Schule):</td>
                                <td>{{ $education->country }}</td>
                            </tr>
                            <tr>
                                <td>Abschlussjahr (JJJJ):</td>
                                <td>{{ $education->year }}</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection