@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-neutral-300 focus:border-red-damask-500 focus:ring-red-damask-500 rounded-md shadow-xs']) }}>
