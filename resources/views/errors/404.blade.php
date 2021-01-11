@extends('layout.pages_frame')

@section('page-content')  
<div>
		<br>
		<br>
        
        <div class="page-404">
        	<div class="container">
            	<div class="section-title" style="text-align: center">
                	<h2>This Page Could Not Be Found!</h2>
                    <p>Opps Error</p>
                </div>
                <div class="page-img">
                	<img src="{{asset('img/404Img.jpg')}}" alt="">
                </div>
                <div class="error-text" style="text-align: center">	
                	<p>Page doesn’t exist or some other error occured. Go to our <a href="{{url('/')}}">home page</a> </p>
                </div>
            </div>
        </div>
        
        
</div>
@endsection
