 @extends('layouts.admin')

 @section('content')
<div class="container">

    <h2 class="card-header">@lang('auth.edit_company')</h2>
    <form action="{{ route('companies.update',['locale' => app()->getLocale(), $company->id]) }}" method="POST" enctype="multipart/form-data">
      @method('PUT')
      @csrf
      @lang('auth.name'):
      <input type="text" name="name" value="{{ $company->name ?? ''}}" class="form-control" required>
      <br>
      @lang('auth.email'):
      <input type="text" name="email" value="{{ $company->email ?? ''}}" class="form-control">
      <br>
      @lang('auth.website'):
      <input type="text" name="website" value="{{ $company->website ?? ''}}" class="form-control">
      <br>
      @lang('auth.logo'):
        <input type="file" name="photo" class="form-control" value="{{ asset($company->logo ?? '') }}"> <span style="color:red">@lang('auth.img_details')</span>
      <br>
      <br>
      <input type="submit" value="@lang('auth.update'):" class="btn btn-primary">
</form>
@endsection
