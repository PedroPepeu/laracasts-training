<ul role="list" class="divide-y divide-gray-100">
    @foreach ($notepads as $np)
        <x-preview-notepad
			:title="$np->title"
			:description="$np->content"
			:owner="$np->user->name ?? 'Unkown'"
			:last_changes="$np->updated_at->diffForHumans()"
        />
    @endforeach
</ul>