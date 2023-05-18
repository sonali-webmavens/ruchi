 @extends('layouts.admin')

@section('styles')

<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet"/>
@endsection

 @section('content')
<div class="container">
<a class="btn btn-success" href="{{ route('companies.create') }}">Create New Company</a>
  <table class="table" id="pTable">
    <h2 class="card-header">Companies List</h2>
      <thead>
        <th>Name</th>
        <th>Email Id</th>
        <th>Website</th>
        <th>Logo</th>
        <th>Action</th>
      </thead>
      <tbody>
      @foreach($companies as $company)
      <tr>
        <td>{{ $company->name ?? ''}}</td>
        <td>{{ $company->email ?? ''}}</td>
        <td>{{ $company->website ?? ''}}</td>
        <td>
          @if($company->logo != null)
          <img src="{{ asset('storage/'.$company->logo) ?? '' }}" height="100" width="100" alt="image">
          @endif
         </td>
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
    </tbody>
  </table>
</div>

@section('javascripts')
<!--<script src="https://code.jquery.com/jquery-3.3.1.js"></script>-->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#pTable').DataTable();
});
</script>
@endsection

@endsection

