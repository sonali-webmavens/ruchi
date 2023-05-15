 @extends('app')

 @section('content')
<div class="container">
 

    <h2 class="card-header">Edit Employee Data</h2>
    <form action="{{ route('employees.update',$employee->id) }}" method="POST" enctype="multipart/form-data">
    	@method('PUT')
      @csrf
      First Name:
      <input type="text" name="first_name" class="form-control" value="{{ $employee->first_name ?? ''}}" required>
      <br>
      Last Name:
      <input type="text" name="last_name" class="form-control" value="{{ $employee->last_name ?? ''}}" required>
      <br>
      Choose Company:
      <select class="form-control" name="company_id">
        <option value=""> Select Company </option>
        @foreach($companies as $company)
          <option value="{{ $company->id }}" @if($company->id == $employee->company_id) selected @endif >{{ $company->name ?? ''}}</option>
        @endforeach
      </select>
      <br>
      Email:
      <input type="email" name="email" value="{{ $employee->email ?? ''}}" class="form-control">
      <br>
      Phone:
      <input type="number" name="phone" value="{{ $employee->phone ?? ''}}" class="form-control">
      <br>
      <br>
      <input type="submit" value="Update" class="btn btn-primary">
</form>
@endsection
