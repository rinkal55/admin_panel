@if(session()->has('greenmsg'))
<div class="alert alert-success" role="alert">
  {{ Session('greenmsg') }}
		{{ Session::forget('greenmsg')	}}
</div>
@elseif(session()->has('redmsg'))
<div class="alert alert-danger" role="alert">
  {{ Session('redmsg') }}
	{{ Session::forget('redmsg')	}}	
</div>
@endif