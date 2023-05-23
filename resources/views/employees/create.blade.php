 @extends('layouts.admin')

 @section('content')
<div class="container">
  
    <h2 class="card-header">@lang('index.new_employee')</h2>
   
    <form action="{{ route('employees.store', app()->getLocale()) }}" method="POST">
      @csrf
      @lang('index.first_name'):
      <input type="text" name="first_name" class="form-control" value="{{ old('first_name')}}" required>
      <br>
      @lang('index.last_name'):
      <input type="text" name="last_name" class="form-control" value="{{ old('last_name')}}" required>
      <br>
      @lang('index.company_name'):
      <select class="form-control" name="company_id">
        <option value=""> Select Company </option>
        @foreach($companies as $company)
          <option value="{{ $company->id ?? ''}}"  @if($company->id == old('company_id')) selected @endif>{{ $company->name ?? ''}}</option>
        @endforeach
      </select>
      <br>
      @lang('index.email'):
      <input type="email" name="email" class="form-control" value="{{ old('email')}}">
      <br>
      @lang('index.phone'):
      <input type="number" name="phone"  class="form-control" value="{{ old('phone')}}">
      <br>
      <br>
      <input type="submit" value="@lang('index.save')" class="btn btn-primary">
</form>
@endsection
