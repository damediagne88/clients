@extends('adminlte::page')

@section('title', 'New Client')

@section('content_header')
    <h1>Add Client</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
        <form class="form-horizontal" method="post" action="{{ route('clients.store')}}">
        @csrf
  <fieldset>
    <div class="form-group">
      <label for="name" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="name" name="name" required>
        @if ($errors->has('name'))
            <p style="color:red;">{{ $errors->first('name')}}</p>
        @endif
      </div>
    </div>

    <div class="form-group">
      <label for="phone" class="col-lg-2 control-label">Phone</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="phone" name="phone" required>
      </div>
    </div>

    <div class="form-group">
      <label for="age" class="col-lg-2 control-label">Age</label>
      <div class="col-lg-10">
        <input type="number" class="form-control" id="age" name="age" required>
      </div>
    </div>

    <div class="form-group">
      <label for="email" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
    </div>
    
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">CREATE</button>
      </div>
    </div>
  </fieldset>
</form>
        </div>

        <script src="//code.jquery.com/jquery.js"></script>
        @include('flashy::message')
    </div>
@stop