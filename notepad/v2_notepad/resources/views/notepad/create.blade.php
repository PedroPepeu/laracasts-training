<x-layout>
    <x-slot:pagetitle>Notepad</x-slot:pagetitle>
    <x-slot:heading>Create Notepad</x-slotheading>
    <form method="POST" action="/jobs">
        @csrf
        {{-- 
            Laravel behind the scenes create an token that will compare, in the post method to an session token, so it can validate that you is you
        --}}
        <div class="space-y-12">
            <div class="pb-12">
            <h2 class="text-base/7 font-semibold">Create a new Job</h2>
            <p class="mt-1 text-sm/6 text-gray-900">We just need a handful of details from you.</p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <x-form-field>
                    <x-form-label for="title">Title</x-form-label>
                    <div class="mt-2">
                        {{-- Add border to the input --}}
                        <x-form-input id="title" name="title" placeholder="My amazing notepad title" required/>
                        <x-form-error name="title"/>
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="content">Description</x-form-label>
                    <div class="mt-2">
                        {{-- alter this to text, it would be better --}}
                        <x-form-input id="content" name="content" placeholder="My amazing notepad" required/>
                        <x-form-error name="content"/>
                    </div>
                </x-form-field>
            </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <x-button-second href="/notepad">Cancel</x-button-second>
            <x-button-first type="submit" :isButton="true">Save</x-button-first>
        </div>
    </form>
</x-layout>