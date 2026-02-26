<div style="max-width:800px;margin:60px auto;background:#111827;padding:40px;border-radius:12px;">

    <h2 style="color:white;">Data Project</h2>

    @foreach($projects as $item)
        <div style="margin-bottom:10px;">
            <a href="{{ route('project.editForm', $item->id) }}"
               style="color:#60A5FA;">
                {{ $item->name }}
            </a>
        </div>
    @endforeach

    <hr style="margin:30px 0;">

    @if($project)
        <h2 style="color:white;">Edit Project</h2>

        <form action="{{ route('project.update', $project->id) }}" method="POST">
            @csrf
            @method('PUT')

            <input type="text"
                   name="name"
                   value="{{ old('name', $project->name) }}"
                   style="width:100%;padding:10px;border-radius:8px;margin-bottom:15px;">

            <button type="submit"
                    style="background:#2563EB;padding:10px 20px;border:none;border-radius:8px;color:white;">
                Update
            </button>
        </form>
    @endif

</div>