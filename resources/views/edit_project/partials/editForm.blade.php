<form action="{{ route('project.update', $project->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $project->name }}">

    <button type="submit">Update</button>
</form>