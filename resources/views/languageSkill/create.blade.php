
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading"vrole="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><span class="glyphicon glyphicon-plus"></span> Sprachkentnisse erfassen </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        <!-- Start der Form zum erfassen einer Berufserfahrung -->
                        {!! Form::open(array('action' => 'LanguageSkillController@store'),array('method' => 'post'), array('class' => 'form-inline')) !!}

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
