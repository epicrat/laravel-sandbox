@extends('layouts.app');
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">User: <b>{{ $users->username }}</b></div>

            <div class="panel-body">
                <form class="form-horizontal" >
                    {{ csrf_field() }}
                    <!-- name -->
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ $users->name }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <!-- family name -->
                    <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                        <label for="fname" class="col-md-4 control-label">Family name</label>

                        <div class="col-md-6">
                            <input id="fname" type="text" class="form-control" name=f"name" value="{{ $users->fname }}" required autofocus>

                            @if ($errors->has('fname'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('fname') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <!-- email -->
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Email</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ $users->email }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
</div>
@endsection

