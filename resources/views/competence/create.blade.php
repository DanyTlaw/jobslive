
            <div class="col-md-12">
                <div class="panel panel-primary">
                     <div class="panel-heading"vrole="tab" id="headingFour">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><span class="glyphicon glyphicon-plus"></span> Kompetenz erfassen </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                    <div class="panel-body">
                        <!-- Start der Form zum erfassen einer Berufserfahrung -->
                        {!! Form::open(array('action' => 'CompetenceController@store'),array('method' => 'post'), array('class' => 'form-inline')) !!}

                        <div class="form-group">
                            {!! Form::Label('name', 'Bezeichnung') !!} </br>
                            {!! Form::Text('name',null, array('class' => 'form-control'))!!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Kompetenz speichern', array('class' => 'btn btn-primary')) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
