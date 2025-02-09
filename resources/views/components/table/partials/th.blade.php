@props(['header'])
<th class="min-w-30px {{ isset($header['class']) ? $header['class'] : '' }}">
    {{ $header }}
</th>
