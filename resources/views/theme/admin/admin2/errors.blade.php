@if (count($errors))
	<ol class="alert alert-danger">		
	    	@foreach($errors->all() as $error)                                    
	        <li >{{ $error }}</li>
	    	@endforeach
	</ol>
@endif