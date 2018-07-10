@extends ('layouts.homepage')

@section('noidung')
<h4> Dãy số bạn cần tìm là: </h4>
@foreach($ar as $a)
    @if (($a % 2) !=0)
        
            {{
                $a.' ' 
            }}
   
    @endif
   
@endforeach

@endsection
