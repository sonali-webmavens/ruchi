 @extends('layouts.admin')

 @section('content')
<div class="container">
  
    <h2 class="card-header">@lang('auth.new_company')</h2>


    <form action="{{ route('companies.store', app()->getLocale()) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @lang('auth.name'):
      <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
      <br>
      @lang('auth.email'):
      <input type="text" name="email" class="form-control" value="{{ old('email') }}">
      <br>
      @lang('auth.website'):
      <input type="text" name="website"  class="form-control" value="{{ old('website') }}">
      <br>
      @lang('auth.logo'):
      <input type="file" name="photo" class="form-control" value="{{ old('photo') }}"><span style="color:red">@lang('auth.img_details')
 </span>
      <br>
      <br>
      <input type="submit" value="@lang('auth.save')" class="btn btn-primary">
</form>
@endsection


