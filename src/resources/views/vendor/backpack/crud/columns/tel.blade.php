@php
$value = data_get($entry, $column['name']);
@endphp

<a target="_blank" href="tel:{{ str_replace(" ", "", $value) }}">
    {{ str_limit(strip_tags($value), array_key_exists('limit', $column) ? $column['limit'] : 50, "[...]") }}
</a>
