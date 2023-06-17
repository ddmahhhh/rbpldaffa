@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 bg-white-900 text-gray-500 focus:border-black-500 focus:border-black-600 focus:ring-blck-500 focus:ring-black-600 rounded-md shadow-sm']) !!}>
