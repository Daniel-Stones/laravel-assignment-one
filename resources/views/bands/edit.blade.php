<x-layout title="Edit | {{$band->name}}">
    <h1>Edit the details for {{$band->name}}</h1>
    <form action="/bands" method="POST">
    @csrf
    @method('PATCH')
    <input type="hidden" name="id" value="{{$band->id}}">
    <div>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" value="{{$band->name}}" />
    </div>
    <div>
      <label for="date">Date:</label>
      <input type="date" id="date" name="date" value="{{$band->date}}" />
    </div>
    <div>
      <label for="startTime">Start time:</label>
      <input type="time" id="startTime" name="startTime" value="{{$band->startTime}}" />
    </div>
    <div>
      <label for="endTime">End time:</label>
      <input type="time" id="endTime" name="endTime" value="{{$band->endTime}}" />
    </div>
    <div>
      <label for="stage">Stage:</label>
      <select id="stage" name="stage">
        <option value="Apex" {{ $band->stage === 'Apex' ? 'selected' : '' }}>Apex</option>
        <option value="Opus" {{ $band->stage === 'Opus' ? 'selected' : '' }}>Opus</option>
        <option value="Avalanche" {{ $band->stage === 'Avalanche' ? 'selected' : '' }}>Avalanche</option>
        <option value="Dogtooth" {{ $band->stage === 'Dogtooth' ? 'selected' : '' }}>Dogtooth</option>
      </select>
    </div>

    <div>
      <button type="submit">Save the Band</button>
    </div>
    </form>
</x-layout>