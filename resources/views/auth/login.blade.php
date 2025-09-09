<x-layout>
    <x-slot:heading>
        Log In
    </x-slot:heading>
    <form action="/login" method="POST">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
               
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">                    
                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="email" type="email" name="email" :value="old('email')"/>
                        </div>
                        <x-form-error name="email" />
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="password" type="password" name="password" />
                        </div>
                        <x-form-error name="password" />
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <x-button>Log In</x-button>
        </div>
    </form>


</x-layout>
