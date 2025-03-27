<x-layout title="Home | Bands">
  <h1>Bands playing at Download 2024</h1>

  <form method="GET" action="/bands">
    <input type="text" name="search" placeholder="Search for a band" value="{{ request('search') }}" />
    <button type="submit">Search</button>
  </form>

  @foreach ($bands as $band)
    <p>
        <a href="/bands/{{$band->id}}">
            <li>{{$band->name}}</li>
        </a>
    </p>
    @endforeach

    {{ $bands->links() }}
</x-layout>