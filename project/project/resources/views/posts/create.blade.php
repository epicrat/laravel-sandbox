@extends('layouts.app');
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Add post</div>

            <div class="panel-body">
                <form class="form-horizontal" method="POST" action="/posts">
                    {{ csrf_field() }}
                    <div>
                    <textarea name="content" id="content" cols="30" rows="10"></textarea>
                    </div>
                    <div>
                    <input type="datetime-local" name="post_on">
                    </div>

                    <input type="submit">
                </form>
            </div>
            
        </div>
    </div>
</div>
</div>
@endsection