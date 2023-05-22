 @extends('layouts.admin')

@section('styles')

<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet"/>
@endsection

 @section('content')
<div class="container">
<a class="btn btn-success" href="{{ route('companies.create', app()->getLocale()) }}">@lang('auth.add_company')</a>
  <table class="table" id="pTable">
    <h2 class="card-header">@lang('auth.company_list')</h2>
      <thead>
        <th>@lang('auth.name')</th>
        <th>@lang('auth.email')</th>
        <th>@lang('auth.website')</th>
        <th>@lang('auth.logo')</th>
        <th>@lang('auth.action')</th>
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
          
          <a href="{{ route('companies.edit',['locale' => app()->getLocale(), $company->id]) }}" class="btn btn-primary">@lang('auth.edit')</a>
          <form action="{{ route('companies.destroy',['locale' => app()->getLocale(), $company->id]) }}" method="POST" style="display: inline;">
            @method('DELETE')
            @csrf
            <input type="submit" name="delete" class="btn btn-danger" value="@lang('auth.delete')" onclick="return confirm('@lang('auth.are_you_sure')')">
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

