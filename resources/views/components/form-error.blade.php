@props(['name'])
@error($name)
    <div class="text-red-500 text-sm py-2"> {{ $message }} </div>
@enderror