@extends('layouts.footer')
@extends('layouts.master')
@extends('layouts.wrapper1')
@section('idd')
{{--
{{$name}}
@endsection

@section('idd1')
{{$name1}}
@if($data)
True
@else
False
@endif

@unless(1==2)
<div class="control-label">
    Its quite complicated
</div>
@endunless

@foreach($people as $person)
{{$person}}
@endforeach
--}}

@if($dbTest=='laratest')
@forelse($getAllUserName as $person)
{{ $person->firstname }}
{{ $person->lastname }}
@empty
Nothing
@endforelse
@endif
@endsection

@extends('layouts.header')
