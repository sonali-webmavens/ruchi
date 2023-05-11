 @extends('app')

 @section('content')
<div class="container">
  
    <h2 class="card-header">New Employee</h2>
      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{ route('employees.store') }}" method="POST">
      @csrf
      First Name:
      <input type="text" name="fname" class="form-control" required>
      <br>
      Last Name:
      <input type="text" name="lname" class="form-control" required>
      <br>
      Choose Company:
      <select class="form-control" name="company_id">
        @foreach($companies as $company)
          <option value="{{ $company->id }}">{{ $company->name }}</option>
        @endforeach
      </select>
      <br>
      Email:
      <input type="email" name="email" class="form-control">
      <br>
      Phone:
      <input type="number" name="phone"  class="form-control">
      <br>
      Logo:
      <input type="file" name="logo" class="form-control img-rounded">
      <br>
      <br>
      <input type="submit" value="Save" class="btn btn-primary">
</form>
@endsection
