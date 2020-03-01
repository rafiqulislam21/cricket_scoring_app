<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<!-- css links -->
	@include('partials.css')
</head>
<body>
	 @include('partials.headerUser')

	 <section>
       <div class=" bg-light">
         <h2 class=" font-weight-bold text-info  p-4 text-center ">Contact Us</h2>
       </div>
     </section>

	 <div class="container ">

	 	<div class="row">
     <div class="col-md-6 col-12 col-sm-12 col-lg-6 clearfix">

			 		<iframe class="well well-sm col-md-12 w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.1026537538655!2d90.36869751434902!3d23.779358593587837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0b3e9aef52d%3A0x963817586281778e!2sMonico+Mina+Tower!5e0!3m2!1sen!2sbd!4v1566298483945!5m2!1sen!2sbd" width="" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
          <!-- <iframe class="well well-sm col-md-12 w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.9099027353327!2d90.38971051428776!3d23.750592084589268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fde903369e0405%3A0x487383a83e003a3d!2sNorth-West+Power+Generation+Company+Limited!5e0!3m2!1sen!2sbd!4v1564982259142!5m2!1sen!2sbd" width="" height="300" frameborder="0" style="border:0" allowfullscreen></iframe> -->
        </div>
	    <div class="col-md-6 ">

	   <form method="POST" action="{{route('sendContact')}}">
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
