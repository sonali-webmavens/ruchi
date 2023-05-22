<a href="{{ route('employees.edit', ['locale' => app()->getLocale(), $id]) }}" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-success edit">
@lang('auth.edit')
</a>
 <form action="{{ route('employees.destroy', ['locale' => app()->getLocale(), $id]) }}" method="POST" style="display: inline;">
  @method('DELETE')
  @csrf
  <input type="submit" value="@lang('auth.delete')" class="btn btn-danger" onclick="return confirm('@lang('auth.are_you_sure')')">
</form>