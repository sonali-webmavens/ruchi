 @extends('app')

 @section('content')
<div class="container">
<a class="btn btn-success" href="{{ route('companies.create') }}">Create New Company</a>
  <table class="table">
    <h2 class="card-header">Companies List</h2>
      <tr>
        <th>Name</th>
        <th>Email Id</th>
        <th>Website</th>
        <th>Logo</th>
        <th>Action</th>
      </tr>
      @foreach($companies as $company)
      <tr>
        <td>{{ $company->name }}</td>
        <td>{{ $company->email }}</td>
        <td>{{ $company->website }}</td>
        <td>{{ $company->logo }}</td>
        <td>
          <a href="{{ route('companies.edit',$company->id) }}" class="btn btn-primary">Edit</a>
          <form action="{{ route('companies.destroy',$company->id) }}" method="POST" style="display: inline;">
            @method('DELETE')
            @csrf
            <input type="submit" name="delete" class="btn btn-danger" value="delete" onclick="return confirm('Are you sure...??')">
          </form>
        </td>
      </tr>
      @endforeach
  </table>
</div>
@endsection
