@props(['type'])
<div class="text-center alert alert-{{$type}} m-2 w-75" role="alert">
    {{$slot}}
</div>