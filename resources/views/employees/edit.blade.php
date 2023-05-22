 @extends('layouts.admin')

 @section('content')
<div class="container">
 

    <h2 class="card-header">@lang('auth.edit_employee')</h2>
    <form action="{{ route('employees.update',['locale' => app()->getLocale(), $employee->id]) }}" method="POST" enctype="multipart/form-data">
    	@method('PUT')
      @csrf
      @lang('auth.first_name'):
      <input type="text" name="first_name" class="form-control" value="{{ $employee->first_name ?? ''}}" required>
      <br>
      @lang('auth.last_name'):
      <input type="text" name="last_name" class="form-control" value="{{ $employee->last_name ?? ''}}" required>
      <br>
      @lang('auth.company_name'):
      <select class="form-control" name="company_id">
        <option value=""> Select Company </option>
        @foreach($companies as $company)
          <option value="{{ $company->id }}" @if($company->id == $employee->company_id) selected @endif >{{ $company->name ?? ''}}</option>
        @endforeach
      </select>
      <br>
      @lang('auth.email'):
      <input type="email" name="email" value="{{ $employee->email ?? ''}}" class="form-control">
      <br>
      @lang('auth.phone'):
      <input type="number" name="phone" value="{{ $employee->phone ?? ''}}" class="form-control">
      <br>
      <br>
      <input type="submit" value="@lang('auth.update')" class="btn btn-primary">
</form>
@endsection
