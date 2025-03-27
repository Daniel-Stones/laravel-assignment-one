<x-layout title="View | {{$band->name}}">
    <h1>{{$band->name}}</h1>
    <p>Date: {{$band->date}}</p>
    <p>Start time: {{$band->startTime}}</p>
    <p>End time: {{$band->endTime}}</p>
    <p>Stage: {{$band->stage}}</p>

    <div class="button-group">
        <a href='/bands/{{$band->id}}/edit'>
            <button>Edit</button>
        </a>

        <form method='POST' action='/bands'>
            @csrf
            @method('DELETE')
            <input type="hidden" name="id" value="{{$band->id}}">
            <button type='submit'>Delete</button>
        </form>
    </div>
</x-layout>