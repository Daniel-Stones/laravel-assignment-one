<x-layout title="Create | One more band">
  <h1>Add a new band</h1>

  <form method="POST" action="/bands">
    @csrf
    <div>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" />
    </div>
    <div>
      <label for="date">Date:</label>
      <input type="date" id="date" name="date" />
    </div>
    <div>
      <label for="startTime">Start time:</label>
      <input type="time" id="startTime" name="startTime" />
    </div>
    <div>
      <label for="endTime">End time:</label>
      <input type="time" id="endTime" name="endTime" />
    </div>
    <div>
      <label for="stage">Stage:</label>
      <select id="stage" name="stage">
        <option value="Apex">Apex</option>
        <option value="Opus">Opus</option>
        <option value="Avalanche">Avalanche</option>
        <option value="Dogtooth">Dogtooth</option>
      </select>
    </div>
    <div>
      <button type="submit">Save the Band</button>
    </div>
  </form>
</x-layout>