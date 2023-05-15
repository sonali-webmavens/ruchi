 @extends('app')

 @section('content')
<div class="container">
<a class="btn btn-success" href="{{ route('employees.create') }}">Add New Employee</a>
  <table class="table">
    <h2 class="card-header">Employees List</h2>
      <tr>
        <th>Name</th>
        <th>Email Id</th>
        <th>Phone</th>
        <th>Company Name</th>
        <th>Action</th>
      </tr>
      @foreach($employees as $employee)
      <tr>
        <td>{{ $employee->first_name ?? '' }} {{ $employee->last_name ?? '' }}</td>
        <td>{{ $employee->email ?? ''}}</td>
        <td>{{ $employee->phone ?? ''}}</td>
        <td>
                   {{ $employee->company->name ?? '' }}
        </td>
        <td>
          <a href="{{ route('employees.edit',$employee->id) }}" class="btn btn-primary">Edit</a>
         <form action="{{ route('employees.destroy',$employee->id) }}" method="POST" style="display:inline;">
          @method('DELETE')
          @csrf
          <input type="submit" name="delete" onclick="return confirm('Are you sure..?')" class="btn btn-danger" value="Delete">
         </form>
        </td>
      </tr>
      @endforeach
  </table>
<div class="row" style="text-align: center;">
 {{ $employees->links() }}
</div>

</div>
@endsection
