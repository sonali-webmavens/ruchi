 @extends('app')

 @section('content')
<div class="container">
  
    <h2 class="card-header">New Employee</h2>
   
    <form action="{{ route('employees.store') }}" method="POST">
      @csrf
      First Name:
      <input type="text" name="first_name" class="form-control" value="{{ old('first_name')}}" required>
      <br>
      Last Name:
      <input type="text" name="last_name" class="form-control" value="{{ old('last_name')}}" required>
      <br>
      Choose Company:
      <select class="form-control" name="company_id">
        <option value=""> Select Company </option>
        @foreach($companies as $company)
          <option value="{{ $company->id ?? ''}}"  @if($company->id == old('company_id')) selected @endif>{{ $company->name ?? ''}}</option>
        @endforeach
      </select>
      <br>
      Email:
      <input type="email" name="email" class="form-control" value="{{ old('email')}}">
      <br>
      Phone:
      <input type="number" name="phone"  class="form-control" value="{{ old('phone')}}">
      <br>
      <br>
      <input type="submit" value="Save" class="btn btn-primary">
</form>
@endsection
