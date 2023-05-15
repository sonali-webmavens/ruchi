 @extends('app')

 @section('content')
<div class="container">
  
    <h2 class="card-header">New Company</h2>


    <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      Name:
      <input type="text" name="name" class="form-control" value="{{ old('name') }}">
      <br>
      Email:
      <input type="text" name="email" class="form-control" value="{{ old('email') }}">
      <br>
      Website:
      <input type="text" name="website"  class="form-control" value="{{ old('website') }}">
      <br>
      Logo:
      <input type="file" name="photo" class="form-control" value="{{ old('photo') }}"><span style="color:red"> Image minium height=100 and width=100. </span>
      <br>
      <br>
      <input type="submit" value="Save" class="btn btn-primary">
</form>
@endsection



