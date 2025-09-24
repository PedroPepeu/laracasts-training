<x-layout>
    <x-slot:pagetitle>Notepad</x-slot:pagetitle>
    <x-slot:heading>{{ $notepad->title }}</x-slotheading>
    {{ $notepad->content }}
    <div class="justify-between flex items-center mt-10">
        <div> {{ $notepad->user->name }} </div>
        <div> {{ $notepad->updated_at->diffForHumans() }} </div>
    </div>
    <div class="justify-between flex items-center mt-10">
        <div>
            <x-button-first :isButton="true" type="submit" form="delete-notepad" class="bg-red-500 hover:bg-red-400">Deletar</x-button-first>
        </div>
        <div class="flex gap-x-6">
            <x-button-second href="/notepad" class="p-2">Voltar</x-button-second>
            <x-button-first href="/notepad{{ $notepad->id }}/edit">Editar</x-button-first>
        </div>
    </div>

    <form method="POST" action="/notepad/{{ $notepad->id }}" id="delete-notepad" class="hidden">
        @csrf
        @method('DELETE')

    </form>
</x-layout>