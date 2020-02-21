@extends('layouts.master')

@section('content')
<form action="{{ route('contactPost')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <input class="form-control" name="name" type="text" placeholder="Name">
  </div>
  <div class="form-group">
    <input class="form-control" name="email" type="email" placeholder="Email">
  </div>
  <div class="form-group">
    <textarea class="form-control" rows="10" cols="30" placeholder="Message..."></textarea>
  </div>
  <div class="form-group">
    <input class="form-control" name="attachment" type="file">
  </div>
  <div class="form-group">
    <button type="submit" class="form-control">Send Message</button>
  </div>
</form>
@endsection
