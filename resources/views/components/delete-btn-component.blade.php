
<form action="{{ route($route, [$routeKey => $keyValue]) }}" method="post">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger btn-sm">Delete</button> 
</form>
  