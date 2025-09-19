<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2>{{ $job['title'] }}</h2>
    <p>
        This job salary is {{ $job['salary'] }} per year. 
    </p>
</x-layout>