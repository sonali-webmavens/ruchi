 @extends('layouts.admin')

 @section('content')
<div class="container">
 

    <h2 class="card-header">@lang('index.edit_employee')</h2>
    <form action="{{ route('employees.update',['locale' => app()->getLocale(), $employee->id]) }}" method="POST" enctype="multipart/form-data">
    	@method('PUT')
      @csrf
      @lang('index.first_name'):
      <input type="text" name="first_name" class="form-control" value="{{ $employee->first_name ?? ''}}" required>
      <br>
      @lang('index.last_name'):
      <input type="text" name="last_name" class="form-control" value="{{ $employee->last_name ?? ''}}" required>
      <br>
      @lang('index.company_name'):
      <select class="form-control" name="company_id">
        <option value=""> Select Company </option>
        @foreach($companies as $company)
          <option value="{{ $company->id }}" @if($company->id == $employee->company_id) selected @endif >{{ $company->name ?? ''}}</option>
        @endforeach
      </select>
      <br>
      @lang('index.email'):
      <input type="email" name="email" value="{{ $employee->email ?? ''}}" class="form-control">
      <br>
      @lang('index.phone'):
      <input type="number" name="phone" value="{{ $employee->phone ?? ''}}" class="form-control">
      <br>
      <br>
      <input type="submit" value="@lang('index.update')" class="btn btn-primary">
</form>
@endsection
