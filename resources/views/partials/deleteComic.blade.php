<form class="d-inline-block" action="{{route('comics.destroy', $comic)}}" method="POST" onsubmit="return confirm('Sei sicuro che vuoi cancellare {{$comic->title}}?')">
    @csrf
    @method('DELETE')
    <button
      type="submit"
      class="btn btn-danger"

    >
      <i class="fa-solid fa-trash"></i>
    </button>
</form>
