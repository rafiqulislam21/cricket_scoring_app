<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

	<!-- css links -->
	@include('partials.css')

	<style media="screen">
	.text-style{
		 background-color: rgba(193,193,193,0.1);
	 }
	 .icons{
display:block;
height: 80px;
width: 80px;
border-radius: 50%;
background:   #D3D3D3;
margin:auto;
margin-bottom: 20px;
margin-top: 20px;
	 }
.icons i{
		 font-size: 30px;
		 padding-top: 23px;

	 }
	 .backImage{
		 margin-top: 20px;
	 background-image: url('img/slide1.jpg') ;
		-webkit-background-size: cover;
 -moz-background-size: cover;
 -o-background-size: cover;
 background-size: cover;

	 }
	 .footerbackground{
		 background-image: url('img/slide2.jpg') ;

		 margin-top: 20px;

	 }
	</style>
</head>
<body>
	 @include('partials.headerUser')
	 @include('admin.partials.alerts')

	 <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" >
   <div class="carousel-inner" >
      <div class="carousel-item active">
   <img class="d-block w-100" src="{{asset('img/test4.jpg')}}" alt="forth" style="height: 450px;">
   <div class="carousel-caption d-none d-md-block ">
     <div class="text-style">
     <h1 class="text-white ">This is build for local ticket tournament</h1>
     <p class="text-white">You can use it in your tournament </p>
   </div>
     <a href="#" class="btn btn-lg bg-success">learn more</a>
   </div>
 </div>

 <div class="carousel-item ">
   <img class="d-block w-100" src="{{asset('img/test2.jpg')}}" alt="forth" style="height: 450px;">
   <div class="carousel-caption d-none d-md-block">
     <h1>This is build for local ticket tournament</h1>
     <p>It is exciting & easy to use </p>
     <a href="#" class="btn btn-lg bg-success">learn more</a>
   </div>
 </div>

 <div class="carousel-item ">
   <img class="d-block w-100" src="{{asset('img/score.jpg')}}" alt="forth" style="height: 450px;">
   <div class="carousel-caption d-none d-md-block">
     <h1>Get Rid of Manual System</h1>
     <p>Use Our Software to Make Things automated</p>
     <a href="#" class="btn btn-lg bg-success">learn more</a>
   </div>
 </div>

 <div class="carousel-item ">
   <img class="d-block w-100" src="{{asset('img/slidder3.jpg')}}" alt="forth" style="height: 450px;">
   <div class="carousel-caption d-none d-md-block">
     <h1>Get Rid of Manual System</h1>
     <p>Use Our Software to Make Things automated</p>
     <a href="#" class="btn btn-lg bg-success">learn more</a>
   </div>
 </div>
   </div>


 </div>
   <div class="container">
     <h1 class="display-4 text-center">PRODUCTS & SERVICES</h1>
     <div class="row">
       <div class="col-md-4">
         <hr>
       </div>
       <div class="col-md-4">
           <p class="text-center">Choose our product to achieve your goal</p>
       </div>
        <div class="col-md-4">
         <hr>
       </div>
     </div>
   <!-- product and service -->
     <div class="row">
       <div class="col-md-4">
        <p class="text-center icons" ><i class="fas fa-cog "></i></p>
        <h3 class="text-success text-center">HIGH QUALITY</h3>
        <p class="text-center">We are developing Customized Web Applications</p>

        <div class="card" >
         <img class="card-img-top" src="{{asset('img/image1.jpg')}}" alt="Card image cap">
           <div class="card-body">
             <p class="card-text">This cricket live score website make manual system automated and give a better experience about this website</p>
             <a href="#" class="btn btn-primary">Read More..</a>
           </div>
          </div>

       </div>
       <div class="col-md-4">
           <p class="text-center icons" ><i class="far fa-image"></i></p>
           <h3 class="text-success text-center">RETINA READY</h3>
           <p class="text-center">Test before your service take</p>
            <div class="card" >
         <img class="card-img-top"  src="{{asset('img/image2.jpg')}}" alt="Card image cap">
           <div class="card-body">
             <p class="card-text">This cricket live score website you can test before buy. it gives you real time experice about this website</p>
             <a href="#" class="btn btn-primary">Read More..</a>
           </div>
          </div>

       </div>
        <div class="col-md-4">
       <p class="text-center icons" ><i class="fas fa-mobile-alt"></i></p>
       <h3 class="text-success text-center">FULLY RESPONSIVE</h3>
       <p class="text-center">This is fully responsive website</p>
        <div class="card" >
         <img class="card-img-top" src="{{asset('img/image3.jpg')}}" alt="Card image cap">
           <div class="card-body">
             <p class="card-text">Responsiveness is very important for a website. you can use in through any device</p>
             <a href="#" class="btn btn-primary">Read More..</a>
           </div>
          </div>
       </div>
     </div>
   </div>

   <div class="backImage">
     <div class="container">
     <h1 class=" text-white pt-5">One thing about our country that is constant is cricket</h1>
     <p class="text-white p-5">If you’ve made sure your product is super-valuable to the customers, when customers get the message from you that their card is going to expire, has expired, or their payment otherwise failed to go through, they’ll drop everything and update their card so they don’t miss a beat with your product</p>
     </div>
   </div>

     <div class="container">
     <h1 class="display-4 text-center">STORY ABOUT US</h1>
     <div class="row">
       <div class="col-md-4">
         <hr>
       </div>
       <div class="col-md-4">
           <p class="text-center">We are developing Inventory Software</p>
       </div>
        <div class="col-md-4">
         <hr>
       </div>
     </div>

      <div class="row">
       <div class="col-md-10 m-auto w-100">
         <img src=" {{asset('img/img2.jpg')}}">
       </div>
       <div class="col-md-12">
       <h2 class="text-center  mt-3">The main objective of the website build</h2>
       <p class="text-justify">The main objective of the application is to automate the existing manual system of local cricket scoring board. Now no need to record match information in paper. User can record data in this system using Internet. This system will more user friendly then before. So that user can easily use it. In the website just input the match information and click the button, you are done. System will auto calculate cricket match total run, total wickets, overs, run rate etc. </p>
       <p class="text-justify">In every cricket match it is important to keep match data save. Because after the whole tournament end then the previous data need to select the man of the tournament, man of the series etc. This system will record all the match data. So that user can see the data’s whenever they need. Manual system takes much time to manage match data. This system is easy to use and saves time to manage data. In a short time, user can input match information data, team information data and every ball related data.</p>
     <a href="" class="btn btn-lg bg-success m-auto" style="float: right;">Read More..</a>
     </div>
      </div>
   </div>

   <footer>
     <div class="footerbackground">
       <div class="container">
         <div class="row">
           <div class="col-md-4">
             <h1>About</h1>
            <ul>
              <li>Automate existing manual system</li>
              <li>Unique site for local cricket tournament</li>
              <li>Get rid of manual live score</li>
              <li>Save your valuable time</li>
            </ul>
           </div>
            <div class="col-md-4 ">
              <h1>Address</h1>
              <p>email:info@d3bug.com</p>
              <p>Website: www.d3bug.com</p>
              <p>Phone: +8801534-501530</p>
            </div>
             <div class="col-md-4">
               <h1 class="">Social Media</h1>
        <div class="sharethis-inline-share-buttons"></div>

             </div>
         </div>
       </div>
     </div>
   </footer>
	 @include('admin.partials.footer')
	 <!-- js links-->
	 @include('partials.js')
</body>
</html>
