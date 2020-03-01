<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	<!-- css links -->
	@include('partials.css')
</head>
<body>
	 @include('partials.headerUser')
   @include('admin.partials.alerts')
	 <section>
       <div class=" bg-light">
         <h2 class=" font-weight-bold text-info  p-4 text-center ">Feed Back</h2>
       </div>
     </section>
	 <div class="container">

	 	<div class="row">
	    <div class="col-md-8 mx-auto">

	   <form method="POST" action="{{route('sendFeedback')}}">
	   	 {{ csrf_field() }}
  <div class="input-group input-group-lg flex-nowrap mb-4">
  <div class="input-group-prepend ">
  <span class="input-group-text" id="addon-wrapping"><i class="far fa-user"></i></span>
  </div>
  <input type="text" class="form-control" placeholder="Your Name" aria-label="Username" name="feedback_user_name" aria-describedby="addon-wrapping" required="true">
</div>

  <div class="input-group flex-nowrap input-group-lg mb-4">
  <div class="input-group-prepend">
    <span class="input-group-text " id="addon-wrapping"><i class="far fa-envelope"></i></span>
  </div>
  <input type="text" name="feedback_user_email" class="form-control" placeholder="Email" aria-label="UserEmail" aria-describedby="addon-wrapping"  required="true">
</div>

<div class="input-group flex-nowrap input-group-lg mb-4">
  <textarea type="text" name="feedback_user_message" class="form-control" placeholder="Message" aria-label="UserArea" aria-describedby="addon-wrapping" rows="5" required="true"></textarea>
</div>


  <!-- <div class="g-recaptcha" data-sitekey="6Ld0PrAUAAAAAP0rt9yCiKqPRnnbEgXmA4qIogiH" ></div> -->

  <button type="submit" class="btn btn-lg btn-success px-5 font-weight-bold float-right mr-5">SEND</button>

</form>
	    </div>


	 	</div>

	 </div>

	 @include('admin.partials.footer')
	 <!-- js links-->
	 @include('partials.js')
</body>
</html>
