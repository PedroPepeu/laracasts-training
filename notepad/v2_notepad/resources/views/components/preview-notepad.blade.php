@props(['title', 'description', 'owner', 'last_changes'])

<div {{ $attributes }}>
    <li class="flex justify-between gap-x-6 py-5">
        <div class="flex min-w-0 gap-x-4">
            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                alt="" class="size-12 flex-none rounded-full bg-gray-50" />
            <div class="min-w-0 flex-auto">
                <p class="text-sm/6 font-semibold text-gray-900"> {{ $title }} </p>
                <p class="mt-1 truncate text-xs/5 text-gray-500"> {{ $description }} </p>
            </div>
        </div>
        <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
            <p class="text-sm/6 text-gray-900"> {{ $owner }} </p>
            <p class="mt-1 text-xs/5 text-gray-500"> {{ $last_changes }} </p>
        </div>
    </li>
    
</div>