 @extends('app')

 @section('content')
<div class="container">
  
    <h2 class="card-header">Edit Company's Data</h2>
    <form action="{{ route('companies.update',$company->id) }}" method="POST">
      @method('PUT')
      @csrf
      Name:
      <input type="text" name="name" value="{{ $company->name }}" class="form-control">
      <br>
      Email:
      <input type="text" name="email" value="{{ $company->email }}" class="form-control">
      <br>
      Website:
      <input type="text" name="website" value="{{ $company->website }}" class="form-control">
      <br>
      Logo:
      <input type="file" name="logo" value="{{ $company->logo }}" class="form-control img-rounded">
      <br>
      <br>
      <input type="submit" value="Update" class="btn btn-primary">
</form>
@endsection