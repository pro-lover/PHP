@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="container ">
            <div class="panel panel-default" style="background-color:#ffffffb5">
                <div class="panel-heading" style="text-align:center;font-size:30px;background-color:#ffffff21"><strong>
                    Registration
                </strong>
                   </div>

                <div class="panel-body">
                    <form class="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="group{{ $errors->has('name') ? ' has-error' : '' }}">
                             <div class="col-md-6">
                                    <label for="name" class="control-label">Name</label>
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                             </div>
                            </div>
                        
                        <!-- surname -->

                        <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                    <label for="surname" class="control-label">surname</label>
                                <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" required>

                                @if ($errors->has('surname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                    <label for="email" class="control-label">E-Mail Address</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- department -->
                        <div class="form-group{{ $errors->has('department') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                    <label for="department" class="control-label">phone</label>
                                <input id="department" type="number" class="form-control" name="department" value="{{ old('department') }}" required>

                                @if ($errors->has('department'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- province-->
                        <div class="form-group{{ $errors->has('province') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                    <label for="province" class="control-label">province</label>
                                <input id="province" type="text" class="form-control" name="province" value="{{ old('province') }}" required>
                                @if ($errors->has('province'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('province') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- municipality -->
                        <div class="form-group{{ $errors->has('municipality') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <label for="municipality" class="control-label">municipality</label>
                                <input id="municipality" type="text" class="form-control" name="municipality" value="{{ old('municipality') }}" required >

                                @if ($errors->has('municipality'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('municipality') }}</strong>
                                    </span>
                                @endif
                            </div>
                      </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                    <label for="password" class="control-label">Password</label>
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                    <label for="password-confirm" class="control-label">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                       
                 </div>
                      {{-- Registration button --}}
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-4 mt-4">
                            <button type="submit" class="btn btn-primary btn-lg btn-block btn-primary-spacing" style="margin-left: -16%;margin-top: 6%">
                                Register
                            </button>
                        </div>
                    </div>   

                       
                    </form>
                </div>
            </div>
  </div>
</div>
@endsection
