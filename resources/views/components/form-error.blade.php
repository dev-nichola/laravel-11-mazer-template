@props(['key'])

@error($key)
<div class="is-invalid">
    <small class="ms-2 text-danger">{{ $message }}</small>
</div>
@enderror