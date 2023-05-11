 @extends('app')

 @section('content')
<div class="container">
  <div class="row">
    @foreach($employees as $employee)
    <div class="col-sm-4">
      <h1> {{ $employee->first_name }}{{ $employee->last_name }} </h3>
      <h3> {{ $employee->email }}</h3>
      <h4> {{ $employee->phone }}</h4>
      <h5> {{ $employee->company_id }}</h5>
    </div>
    @endforeach
  </div>
  <div class="row">
  <table class="table">
      <tr>
        <th>Name</th>
        <th>Email Id</th>
      </tr>
      @foreach($companies as $company)
      <tr>
        <td>{{ $company->name }}</td>
        <td>{{ $company->email }}</td>
      </tr>
      @endforeach
  </table>
</div>
</div>
@endsection
