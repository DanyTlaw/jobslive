
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-    expanded="false" aria-controls="collapseTwo"><span class="glyphicon glyphicon-plus"></span> Ausbildung erfassen </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <!-- Start der Form zum erfassen einer Ausbildung -->
                        {!! Form::open(array('action' => 'EducationController@store'),array('method' => 'post'), array('class' => 'form-inline')) !!}

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
                            {!! Form::Label('place', 'Ort (Schule)') !!} </br>
                            {!! Form::Text('place',null, array('class' => 'form-control'))!!}
                        </div>

                        <div class="form-group">
                            <div class="dropdown">
                                {!! Form::Label('country', 'Land (Schule)') !!}
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
