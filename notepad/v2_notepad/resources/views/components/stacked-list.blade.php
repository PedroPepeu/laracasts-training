<ul role="list">
    @foreach ($notepads as $np)
        <x-preview-notepad
			:title="$np->title"
			:description="$np->content"
			:owner="$np->user->name ?? 'Unkown'"
			:last_changes="$np->updated_at->diffForHumans()"
			href="/notepad/{{ $np->id }}"
        />
    @endforeach
	{{ $notepads->links() }}
	<div class="justify-between flex items-center">
        <div>
        </div>
        <div class="flex mt-4">
			<x-button-first href="/notepad/create">Criar notepad</x-button-first>
		</div>
    </div>
</ul>