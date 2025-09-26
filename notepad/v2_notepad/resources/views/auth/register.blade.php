<x-layout>
    <x-slot:pagetitle>
        Register
    </x-slot:pagetitle>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form method="POST" action="/register">
        @csrf
        {{-- 
            Laravel behind the scenes create an token that will compare, in the post method to an session token, so it can validate that you is you
        --}}
        <div class="space-y-12">
             <div class="border-b pb-12">
            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <x-form-field>
                    <x-form-label for="name">Full Name</x-form-label>
                    <div class="mt-2">
                        <x-form-input id="name" name="name" :value="old('name')" required/>
                        <x-form-error name="name"/>
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="email">Email Address</x-form-label>
                    <div class="mt-2">
                        <x-form-input id="email" name="email" type="email" :value="old('email')" required/>
                        <x-form-error name="email"/>
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="password">Password</x-form-label>
                    <div class="mt-2">
                        <x-form-input type="password" id="password" name="password" required/>
                        <x-form-error name="password"/>
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                    <div class="mt-2">
                        <x-form-input type="password" id="password_confirmation" name="password_confirmation" required/>
                        <x-form-error name="password_confirmation"/>
                    </div>
                </x-form-field>
            </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" type="button" class="text-sm/6 font-semibold">Cancel</a>
            <x-button-first :isButton="true" type="submit">Register</x-button-first>
        </div>
    </form>
</x-layout>