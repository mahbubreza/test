<x-layout>
    <x-slot:heading>
        Edit Jobs
    </x-slot:heading>
    <form action="/jobs/{{ $job->id }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Job Create</h2>
                <p class="mt-1 text-sm/6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="title" type="text" name="title" value="{{ $job->title }}" required />
                        </div>
                        @error('title')
                            <div class="text-red-500 text-sm py-2"> {{ $message }} </div>
                        @enderror
                    </div>

                    <div class="sm:col-span-4">
                        <x-form-label for="salary">Salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="salary" type="text" name="salary" value="{{ $job->salary }}" required />
                        </div>
                        @error('salary')
                            <div class="text-red-500 text-sm py-2"> {{ $message }} </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-between">
            <div>
                <button form="delete-form" class="mt-3 ml-3 text-red-500 font-bold">Delete</button>
            </div> 
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/jobs" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                <x-button>Update</x-button>
            </div>
        </div>


        
    </form>

    <form id="delete-form" action="/jobs/{{ $job->id }}" method="POST" class="hidden">
        @csrf
        @method('DELETE')
    </form>

</x-layout>
