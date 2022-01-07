@if ($errors->any())
<div class="alert bg--error">
<div class="alert__body">    
        @if ( !empty($header) && $header === true )
        <h4><i class="icon fa fa-ban"></i> Form Errors</h4>
        @endif
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        </div>
        <div class="alert__close">×</div>
</div>
@endif


@if(session()->has('message.level'))
<div class="alert bg--{{ session('message.level') }}"> 
<div class="alert__body">
<span>{!! session('message.content') !!}</span>
</div>
<div class="alert__close">×</div>
</div>
@endif



<!-- error / success

$request->session()->flash('message.level', 'danger');
    $request->session()->flash('message.content', 'Pin has been used by another user!');

 -->

