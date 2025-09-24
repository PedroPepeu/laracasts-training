@props(['title', 'description', 'owner', 'last_changes'])

<a class="flex w-full justify-between gap-x-6 py-5 text-left border-gray-400 border-2 rounded-lg px-4 mb-4" {{ $attributes }}>
    <div class="flex min-w-0 gap-x-4">
        <div class="min-w-0 flex-auto">
            <p class="text-sm/6 font-semibold text-gray-900">{{ $title }}</p>
            <p class="mt-1 truncate text-xs/5 text-gray-500">{{ $description }}</p>
        </div>
    </div>
    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
        <p class="text-sm/6 text-gray-900">{{ $owner }}</p>
        <p class="mt-1 text-xs/5 text-gray-500">{{ $last_changes }}</p>
    </div>
</a>
