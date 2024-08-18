@props(['type' => 'a'])

@if($type === 'a')
  <a {{ $attributes }}>{{ $slot }}</a>
@else
  <button {{ $attributes }}>{{ $slot }}</button>
@endif
