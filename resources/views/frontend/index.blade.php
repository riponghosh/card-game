@extends('frontend.template')

@section('title', 'Home')

@section('content')

    

	<router-view>
        {{--placeholder to show while Vue is loading on page load first time--}}
        <p class="text-center" style="padding: 2em;">
            <span class="glyphicon glyphicon-refresh spin"></span> Loading...
        </p>
    </router-view>
    <!-- set progressbar -->
    <vue-progress-bar></vue-progress-bar>

@endsection

@section('app')
	<script>
	    window.Laravel =  <?php echo json_encode([
	            'csrfToken' => csrf_token(),
	        ]); ?>
	</script>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script type="text/javascript">
    	// this.$Progress.start();
        
    </script>
@endsection