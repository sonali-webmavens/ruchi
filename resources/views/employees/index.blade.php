 @extends('layouts.admin')

@section('styles')

<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet"/>
@endsection

 @section('content')
<div class="container">
<a class="btn btn-success" href="{{ route('employees.create') }}">Add New Employee</a>
  <table class="table" id="pTable">
    <h2 class="card-header">Employees List</h2>
    <thead>
      <tr>
        <th>first_name</th>
        <th>last_name</th>
        <th>email</th>
        <th>phone</th>
        <th>company_name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
     
    </tbody>
  </table>


</div>
@section('javascripts')
<!--<script src="https://code.jquery.com/jquery-3.3.1.js"></script>-->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
    var table = $('#pTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('employees.index') }}",
        columns: [
            {data: 'first_name',name: 'first_name'},
            {data: 'last_name',name: 'last_name'},
            {data: 'email',name: 'email'},
            {data: 'phone',name: 'phone'},
            {data: 'company_name',name: 'company_name'},
            {data: 'action', name: 'action'},
        ]
    });
  });

</script>
@endsection


@endsection

    