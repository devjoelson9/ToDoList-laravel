<div class="mb-4">
    <label for="{{$id}}" class="block text-gray-700 font-bold mb-2">{{$label}} @isset($required) <span class="text-red-500">*</span> @endisset</label>
    <input type="{{$type ?? 'text'}}" id="{{$id}}" name="{{$name}}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" @isset($required) required @endisset>
    @error($name)
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>