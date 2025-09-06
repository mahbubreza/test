<x-layout>
    <x-slot:heading>
        Create Jobs
    </x-slot:heading>
    <form action="/jobs" method="POST">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Job Create</h2>
                <p class="mt-1 text-sm/6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="title" type="text" name="title" placeholder="Shift Leader" required />
                        </div>
                        @error('title')
                            <div class="text-red-500 text-sm py-2"> {{ $message }} </div>
                        @enderror
                    </div>

                    <div class="sm:col-span-4">
                        <x-form-label for="salary">Salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="salary" type="text" name="salary" placeholder="$50,000 per year" required />
                        </div>
                        @error('salary')
                            <div class="text-red-500 text-sm py-2"> {{ $message }} </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/jobs" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <x-button>Save</x-button>
        </div>
    </form>


</x-layout>
