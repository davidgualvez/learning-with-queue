@extends('master')

@section('content')
  <form  method="post" action="{{ route('normal') }}">
    @csrf
    <div class="form-row">

      <div class="form-group col-md-6">
        <label>title</label>
        <input required name="title" type="text" class="form-control form-control-sm">
      </div>
      <div class="form-group col-md-6">
        <label>email</label>
        <input required name="email" type="email" class="form-control form-control-sm">
      </div>

      <div class="form-group col-md-12">
        <label>message</label>
        <textarea name="message" class="form-control" rows="3"></textarea>
      </div> 

    </div>  
    <button type="submit" class="btn btn-primary">Send</button>
  </form>
@endsection