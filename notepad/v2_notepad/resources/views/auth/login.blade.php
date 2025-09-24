<x-layout>
    <x-slot:pagetitle>
        Log In
    </x-slot:pagetitle>
    <x-slot:heading>
        Log In
    </x-slot:heading>

    <form method="POST" action="/login">
        @csrf
        {{-- 
            Laravel behind the scenes create an token that will compare, in the post method to an session token, so it can validate that you is you
        --}}
        <div class="space-y-12">
            <div class="border-b border-black pb-12">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="email_address">Email Address</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="email_address" name="email_address" type="email" :value="old('email')" class="border-black" required/>
                            <x-form-error name="email_address"/>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="password" name="password" placeholder="Password" required/>
                            <x-form-error name="password"/>
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" type="button" class="text-sm/6 font-semibold text-white">Cancel</a>
            <x-form-button>Log In</x-form-button>
        </div>
    </form>
</x-layout>