 @extends('app')

 @section('content')
<div class="container">
  
    <h2 class="card-header">New Company</h2>
    <form action="{{ route('companies.store') }}" method="POST">
      @csrf
      Name:
      <input type="text" name="name" class="form-control" required>
      <br>
      Email:
      <input type="text" name="email" class="form-control">
      <br>
      Website:
      <input type="text" name="website"  class="form-control">
      <br>
      Logo:
      <input type="file" name="logo" class="form-control img-rounded">
      <br>
      <br>
      <input type="submit" value="Save" class="btn btn-primary">
</form>
@endsection



