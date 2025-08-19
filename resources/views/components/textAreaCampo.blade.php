<div class="mb-6">
    <label for="{{ $id }}" class="block mb-2 font-bold text-gray-600">{{ $label }}</label>
    <textarea 
        id="{{ $id }}" 
        name="{{ $name }}" 
        rows="{{ $rows ?? 4 }}"
        class="w-full p-3 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 break-words whitespace-pre-wrap"
        {{ $attributes }}
    >{{ old($name, $value ?? '') }}</textarea>
</div>