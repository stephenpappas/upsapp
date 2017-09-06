@extends('home')

@section('title', '| Edit Business Hours')

@section('content')
<div class="row">
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Edit Business Hours</h3>
        </div>
            <ul class="list-group">
            <form class="form-horizontal" method="post" action="{{-- {{url('/account/'.$account->id)}} --}}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

            <li class="list-group-item">
                <div class="row">
                  <div class="col-md-1 col-md-offset-1">
                    <div class="form-group">
                      <label class="col-md-5">Monday</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="monopopentime" class="col-md-6 control-label small">Open Time:</label>
                      <div class="col-md-6">
                        <input type="time" class="form-control" id="monopopentime" name="monopopentime" placeholder="08:00 AM" value="{{-- {{ $account->monopopentime }} --}}">
                        @if ($errors->has('monopopentime'))
                          <span class="help-block">
                            <strong>{{ $errors->first('monopopentime') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="monopclosetime" class="col-md-6 control-label small">Close Time:</label>
                      <div class="col-md-6">
                        <input type="time" class="form-control" id="monopclosetime" name="monopclosetime" placeholder="08:00 AM" value="{{-- {{ $account->monopclosetime }} --}}">
                        @if ($errors->has('monopclosetime'))
                          <span class="help-block">
                            <strong>{{ $errors->first('monopclosetime') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="mongateclosetime" class="col-md-6 control-label small">Gate Close:</label>
                      <div class="col-md-6">
                        <input type="time" class="form-control" id="mongateclosetime" name="mongateclosetime" placeholder="08:00 AM" value="{{-- {{ $account->mongateclosetime }} --}}">
                        @if ($errors->has('mongateclosetime'))
                          <span class="help-block">
                            <strong>{{ $errors->first('mongateclosetime') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1 col-md-offset-1">
                    <div class="form-group">
                      <label class="col-md-5">Tuesday</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="tueopopentime" class="col-md-6 control-label small">Open Time:</label>
                      <div class="col-md-6">
                        <input type="time" class="form-control" id="tueopopentime" name="tueopopentime" placeholder="08:00 AM" value="{{-- {{ $account->tueopopentime }} --}}">
                        @if ($errors->has('tueopopentime'))
                          <span class="help-block">
                            <strong>{{ $errors->first('tueopopentime') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="tueopclosetime" class="col-md-6 control-label small">Close Time:</label>
                      <div class="col-md-6">
                        <input type="time" class="form-control" id="tueopclosetime" name="tueopclosetime" placeholder="08:00 AM" value="{{-- {{ $account ->tueopclosetime }} --}}">
                        @if ($errors->has('tueopclosetime'))
                          <span class="help-block">
                            <strong>{{ $errors->first('tueopclosetime') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>  
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="tuegateclosetime" class="col-md-6 control-label small">Gate Close:</label>
                      <div class="col-md-6">
                        <input type="time" class="form-control" id="tuegateclosetime" name="tuegateclosetime" placeholder="08:00 AM" value="{{-- {{ $account->tuegateclosetime }} --}}">
                        @if ($errors->has('tuegateclosetime'))
                          <span class="help-block">
                            <strong>{{ $errors->first('tuegateclosetime') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1 col-md-offset-1">
                    <div class="form-group">
                      <label class="col-md-5">Wednesday</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="wedopopentime" class="col-md-6 control-label small">Open Time:</label>
                      <div class="col-md-6">
                        <input type="time" class="form-control" id="wedopopentime" name="wedopopentime" placeholder="08:00 AM" value="{{-- {{ $account->wedopopentime }} --}}">
                        @if ($errors->has('wedopopentime'))
                          <span class="help-block">
                            <strong>{{ $errors->first('wedopopentime') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="wedopclosetime" class="col-md-6 control-label small">Close Time:</label>
                      <div class="col-md-6">
                        <input type="time" class="form-control" id="wedopclosetime" name="wedopclosetime" placeholder="08:00 AM" value="{{-- {{ $account->wedopclosetime }} --}}">
                        @if ($errors->has('wedopclosetime'))
                          <span class="help-block">
                            <strong>{{ $errors->first('wedopclosetime') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>  
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="wedgateclosetime" class="col-md-6 control-label small">Gate Close:</label>
                      <div class="col-md-6">
                        <input type="time" class="form-control" id="wedgateclosetime" name="wedgateclosetime" placeholder="08:00 AM" value="{{-- {{ $account->wedgateclosetime }} --}}">
                        @if ($errors->has('wedgateclosetime'))
                          <span class="help-block">
                            <strong>{{ $errors->first('wedgateclosetime') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1 col-md-offset-1">
                    <div class="form-group">
                      <label class="col-md-5">Thursday</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="thuopopentime" class="col-md-6 control-label small">Open Time:</label>
                      <div class="col-md-6">
                        <input type="time" class="form-control" id="thuopopentime" name="thuopopentime" placeholder="08:00 AM" value="{{-- {{ $account->thuopopentime }} --}}">
                        @if ($errors->has('thuopopentime'))
                          <span class="help-block">
                            <strong>{{ $errors->first('thuopopentime') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="thuopclosetime" class="col-md-6 control-label small">Close Time:</label>
                      <div class="col-md-6">
                        <input type="time" class="form-control" id="thuopclosetime" name="thuopclosetime" placeholder="08:00 AM" value="{{-- {{ $account->thuopclosetime }} --}}">
                        @if ($errors->has('thuopclosetime'))
                          <span class="help-block">
                            <strong>{{ $errors->first('thuopclosetime') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="thugateclosetime" class="col-md-6 control-label small">Gate Close:</label>
                      <div class="col-md-6">
                        <input type="time" class="form-control" id="thugateclosetime" name="thugateclosetime" placeholder="08:00 AM" value="{{-- {{ $account->thugateclosetime }} --}}">
                        @if ($errors->has('thugateclosetime'))
                          <span class="help-block">
                            <strong>{{ $errors->first('thugateclosetime') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1 col-md-offset-1">
                    <div class="form-group">
                      <label class="col-md-5">Friday</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="friopopentime" class="col-md-6 control-label small">Open Time:</label>
                      <div class="col-md-6">
                        <input type="time" class="form-control" id="friopopentime" name="friopopentime" placeholder="08:00 AM" value="{{-- {{ $account->friopopentime }} --}}">
                        @if ($errors->has('friopopentime'))
                          <span class="help-block">
                            <strong>{{ $errors->first('friopopentime') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="friopclosetime" class="col-md-6 control-label small">Close Time:</label>
                      <div class="col-md-6">
                        <input type="time" class="form-control" id="friopclosetime" name="friopclosetime" placeholder="08:00 AM" value="{{-- {{ $account->friopclosetime }} --}}">
                        @if ($errors->has('friopclosetime'))
                          <span class="help-block">
                            <strong>{{ $errors->first('friopclosetime') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="frigateclosetime" class="col-md-6 control-label small">Gate Close:</label>
                      <div class="col-md-6">
                        <input type="time" class="form-control" id="frigateclosetime" name="frigateclosetime" placeholder="08:00 AM" value="{{-- {{ $account->frigateclosetime }} --}}">
                        @if ($errors->has('frigateclosetime'))
                          <span class="help-block">
                            <strong>{{ $errors->first('frigateclosetime') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1 col-md-offset-1">
                    <div class="form-group">
                      <label class="col-md-5">Saturday</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="satopopentime" class="col-md-6 control-label small">Open Time:</label>
                      <div class="col-md-6">
                        <input type="time" class="form-control" id="satopopentime" name="satopopentime" placeholder="08:00 AM" value="{{-- {{ $account->satopopentime }} --}}">
                        @if ($errors->has('satopopentime'))
                          <span class="help-block">
                            <strong>{{ $errors->first('satopopentime') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="satopclosetime" class="col-md-6 control-label small">Close Time:</label>
                      <div class="col-md-6">
                        <input type="time" class="form-control" id="satopclosetime" name="satopclosetime" placeholder="08:00 AM" value="{{-- {{$account->satopclosetime }} --}}">
                        @if ($errors->has('satopclosetime'))
                          <span class="help-block">
                            <strong>{{ $errors->first('satopclosetime') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="satgateclosetime" class="col-md-6 control-label small">Gate Close:</label>
                      <div class="col-md-6">
                        <input type="time" class="form-control" id="satgateclosetime" name="satgateclosetime" placeholder="08:00 AM" value="{{-- {{ $account ->satgateclosetime }} --}}">
                        @if ($errors->has('satgateclosetime'))
                          <span class="help-block">
                            <strong>{{ $errors->first('satgateclosetime') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1 col-md-offset-1">
                    <div class="form-group">
                      <label class="col-md-5">Sunday</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="sunopopentime" class="col-md-6 control-label small">Open Time:</label>
                      <div class="col-md-6">
                        <input type="time" class="form-control" id="sunopopentime" name="sunopopentime" placeholder="08:00 AM" value="{{-- {{ $account->sunopopentime }} --}}">
                        @if ($errors->has('sunopopentime'))
                          <span class="help-block">
                            <strong>{{ $errors->first('sunopopentime') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="sunopclosetime" class="col-md-6 control-label small">Close Time:</label>
                      <div class="col-md-6">
                        <input type="time" class="form-control" id="sunopclosetime" name="sunopclosetime" placeholder="08:00 AM" value="{{-- {{ $account->sunopclosetime }} --}}">
                        @if ($errors->has('sunopclosetime'))
                          <span class="help-block">
                            <strong>{{ $errors->first('sunopclosetime') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="sungateclosetime" class="col-md-6 control-label small">Gate Close:</label>
                      <div class="col-md-6">
                        <input type="time" class="form-control" id="sungateclosetime" name="sungateclosetime" placeholder="08:00 AM" value="{{-- {{ $account->sungateclosetime }} --}}">
                        @if ($errors->has('sungateclosetime'))
                          <span class="help-block">
                            <strong>{{ $errors->first('sungateclosetime') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
            </li>    
            <li class="list-group-item">
                <div class="row">
                  <div class="col-12 float-left col-md-10 col-md-offset-1">
                    <div class="form-group">
                      <label for="accountnotes" class="control-label col-md-1">Notes:</label>
                      <div class="col-md-11">
                      <input type="text" class="form-control" id="accountnotes" name="accountnotes" placeholder="Gate codes, door numbers, etc." value="{{-- {{$account->accountnotes} --}}">
                      @if ($errors->has('accountnotes'))
                        <span class="help-block">
                            <strong>{{ $errors->first('accountnotes') }}</strong>
                        </span>
                      @endif
                      </div>
                    </div>
                  </div>
                </div>                
                <div class="row">   
                    <div class="form-group">
                        <div class="col-md-2 col-md-offset-5">
                            <button type="submit" class="btn btn-primary btn-block">Update</button>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        </form>    
    </div>
</div>
</div>
@endsection