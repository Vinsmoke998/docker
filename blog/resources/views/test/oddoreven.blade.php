@extends ('layouts.homepage')

@section('noidung')
@if ($num % 2 ==0)
{{$num.' là số chẵn'}}
@elseif ($num % 2 !==0)
{{$num.' là số lẻ'}}
@endif 

@endsection
{{-- --}}
