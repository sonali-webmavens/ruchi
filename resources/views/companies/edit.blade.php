 @extends('app')

 @section('content')
<div class="container">

    <h2 class="card-header">Edit Company's Data</h2>
    <form action="{{ route('companies.update',$company->id) }}" method="POST" enctype="multipart/form-data">
      @method('PUT')
      @csrf
      Name:
      <input type="text" name="name" value="{{ $company->name ?? ''}}" class="form-control" required>
      <br>
      Email:
      <input type="text" name="email" value="{{ $company->email ?? ''}}" class="form-control">
      <br>
      Website:
      <input type="text" name="website" value="{{ $company->website ?? ''}}" class="form-control">
      <br>
      Logo:
        <input type="file" name="photo" class="form-control" value="{{ asset($company->logo ?? '') }}"> <span style="color:red"> Image minium height=100 and width=100. </span>
      <br>
      <br>
      <input type="submit" value="Update" class="btn btn-primary">
</form>
@endsection
