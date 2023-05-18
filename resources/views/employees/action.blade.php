<a href="{{ route('employees.edit', [$id]) }}" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-success edit">
Edit
</a>
 <form action="{{ route('employees.destroy', [$id]) }}" method="POST" style="display: inline;">
  @method('DELETE')
  @csrf
  <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure..?')">
</form>