@props(['color'=>'gray-50', 'padding'=>'p-6'])

<div {{$attributes->merge(['class' => 'bg-'.$color.' border border-gray-200 rounded '.$padding])}}>
    {{$slot}}
</div>