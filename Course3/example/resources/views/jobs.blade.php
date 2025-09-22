<x-layout>
	<x-slot:heading>
    	Jobs Listing
    </x-slot:heading>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline block px-4 py-6 border border-gray-200 rounded-lg">
                <div>
                    {{  $job->employer->name }}
                </div>
                <div>
                    {{ $job['title'] }}: Pays {{ $job['salary'] }} per year.
                </div>
            </a>        
        @endforeach

        <div>
            {{ $jobs->links() }} {{-- as easy as it appears //// php artisan vendor:publish \\\\ search->pagination --}}
        </div>
    <div>
</x-layout>