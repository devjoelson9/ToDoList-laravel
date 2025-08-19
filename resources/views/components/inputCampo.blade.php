<div class="mb-6">
    <label for="{{ $id }}" class="block mb-2 font-bold text-gray-600">{{ $label }}</label>
    <input 
        type="{{ $type }}"  
        id="{{ $id }}" 
        name="{{ $name }}" 
        value="{{ $value ?? old($name) }}" 
        {{ $attributes->merge(['class' => 'w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500']) }}
    >
</div>