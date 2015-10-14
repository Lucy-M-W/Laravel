 <div class="search">
      
	    {{ Form::model(null, array('route' => array('Zipcode_code'))) }}
	    {{ Form::text('query', null, array( 'placeholder' => 'Search query...' )) }}
	    {{ Form::submit('Search') }}
	    {{ Form::close() }}
	</div>

