 @extends('layouts.admin')

 @section('content')
<div class="container">
  
    <h2 class="card-header">@lang('index.new_company')</h2>


    <form action="{{ route('companies.store', app()->getLocale()) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @lang('index.name'):
      <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
      <br>
      @lang('index.email'):
      <input type="text" name="email" class="form-control" value="{{ old('email') }}">
      <br>
      @lang('index.website'):
      <input type="text" name="website"  class="form-control" value="{{ old('website') }}">
      <br>
      @lang('index.logo'):
      <input type="file" name="photo" class="form-control" value="{{ old('photo') }}"><span style="color:red">@lang('index.img_details')
 </span>
      <br>
      <br>
      <input type="submit" value="@lang('index.save')" class="btn btn-primary">
</form>
@endsection


