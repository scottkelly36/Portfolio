@extends('layouts.app')

@section('content')


<div class="container" id="home">
   <div class="title">
      <img class="img-fluid" src="/images/logo.png" alt="logo">
      <h1 class="animation"> Metaa</h1>
      <p></p>
   </div>

   <div>
      <div class="col arrow-down bounce center">
         <i class="fas fa-chevron-down"></i>
      </div>
   </div>
</div>

<div class="container" id="portfolio">
   <div class="row">
      <h2>From my portfolio</h2>
   </div>
   <div class="row">

      <div class="col">
         <div class="portfolio-item">
            <img id="portfolio-img" src="/images/foodies-blog.png" class="img-thumbnail image" alt="">
            <div class="middle">
               <div class="links">
                  <a href="" class="overlay-github" target="_blank"><i class="fab fa-github-square"></i></a>
                  <a href="" target="_blank"><i class="fas fa-window-maximize" target="_blank"></i></a>
               </div>
            </div>
         </div>
         <!--add to this col here-->
      </div>

      <div class="col">
         <div class="portfolio-item">
            <img id="portfolio-img" src="/images/portfolioitem2.png"class="img-thumbnail image" alt="">
            <div class="middle">
               <div class="links">
                  <a href="" class="overlay-github" target="_blank"><i class="fab fa-github-square"></i></a>
                  <a href="" target="_blank"><i class="fas fa-window-maximize"></i></a>
               </div>
            </div>
         </div>
         <!--add to this col here-->
      </div>

      <div class="col">
         <div class="portfolio-item">
            <img id="portfolio-img" src="/images/landing_page.png" class="img-thumbnail image" alt="">
            <div class="middle">
               <div class="links">
                  <a href="" class="overlay-github" target="_blank"><i class="fab fa-github-square"></i></a>
                  <a href="" target="_blank"><i class="fas fa-window-maximize"></i></a>
               </div>
            </div>
         </div>
         <!--add more to this col here-->
      </div>

   </div>
   <div class="row">

   </div>
</div>

<div class="container" id="about">
   <div class="row">
      <h2>Who is behind it all</h2>
   </div>

   <div class="row section">
      <div class="col">
         <p>Hi I'm Scott! I'm a Full stack web developer based in the North East of England. I have a passion for building wesites of all kinds, and helping compaines of all sizes build their online prescence.
            I'm available for remote work and ready to build the site you've been imagining!<a href="#contact"><strong> Just get in touch.</strong></a>
         </p>
         <p>If you would like to know more about me and the coding languages I can use fel free to download <a href="#"><strong>my resume.</strong></a></p>
      </div>

      <div class="col center">         
         <img class="img-fluid rounded" src="/images/portfolio_img.jpg" alt="portfolio image">
      </div>
   </div>

   <div class="row section">
      <h3>My Skills</h3>
   </div>

   <div class="row">
      <div class="row col-sm-4">
         <div class="col-3">
            <img class="img-fluid center" src="/images/Ui_Ux_design.png" alt="">
         </div>
         <div class="col-8">
            <h4>UX/UI Design</h4>
            <p>The user experiance and interface is everything that make up your website, and the reason users will keep coming back.</p>
         </div>
      </div>

      
      <div class="row col-sm-4">
         <div class="col-3">
            <img class="img-fluid center" src="/images/magglass-png.png" alt="">
         </div>
         <div class="col-8">
            <h4>SEO</h4>
            <p>Search engine optimisation will help to get your business at the top of Google searches.</p>
         </div>
      </div>
      

      
      <div class="row col-sm-4">
         <div class="col-3">
            <img class="img-fluid center" src="/images/responsive.png" alt="">
         </div>
         <div class="col-8">
            <h4>Responsive Design</h4>
            <p>Responsive Design should be at the front of any website with 52% of web traffic world wide was viewed on a smart phone.</p>
         </div>
      </div>
   

   </div>    
   <div class="row">
         
      <div class="row col-sm-4">
         <div class="col-3">
            <img class="img-fluid center" src="/images/wordpress.png" alt="">
         </div>
         <div class="col-8">
            <h4>WordPress</h4>
            <p>WordPress is a free content management system, and is a great place to design and build website's.</p>
         </div>
      </div>
      
      <div class="row col-sm-4">
         <div class="col-3">
            <img class="img-fluid center" src="/images/laravel.png" alt="">
         </div>
         <div class="col-8">
            <h4>PHP Laravel Expert</h4>
            <p>being a PHP Laravel expert means we can get your site up quicker with no problems on launch.</p>
         </div>
      </div>

      <div class="row col-sm-4">
         <div class="col-3">
            <img class="img-fluid center" src="/images/photo_editing.png" alt="">
         </div>
         <div class="col-8">
            <h4>Photo Editing</h4>
            <p>The smallest details can make or break a website so having all your images to scale and looking right is a top priority.</p>
         </div>
      </div>  

   </div>
   
</div>

<div class="container" id="contact">
   <div class="row">
      <h2>Get in touch</h2>
   </div>

   <div class="row section">
      <p>If your interested in using our using our services, or just have a question you need answering just get in touch and we will answer as soon as possible.</p>
   </div>

   <div class="row justify-content-center">
      <span class="contact col-sm-2">
         <i class="far fa-envelope"></i>
         <a href="mailto:scott_kelly@metaa.co.uk?Subject=site%20message">scott_kelly@metaa.co.uk</a>
      </span>
      <span class="contact col-sm-2">
         <i class="fas fa-phone"></i>
         <p>07470941373</p>
      </span>
   </div>
      <form  class="form-row section" action="/contact" method="POST">
         @csrf
         <div class="col-6">
            
               <label for="name">Name</label>
               <input name="name" class="form-control textarea" type="text" value="{{ old('name') }}">
               <div>{{ $errors->first('name') }}</div>
            
               <label for="email">Email</label>
               <input name="email" class="form-control textarea" type="text" value="{{ old('email') }}">
               <div>{{ $errors->first('email') }}</div>

               <label for="subject">Subject</label>
               <input name="subject" class="form-control textarea" type="text" value="{{ old('subject') }}">
               <div>{{ $errors->first('subject') }}</div>

         </div>

         <div class="col-6">
            
               <label for="message">Message</label>
               <textarea class="form-control message" name="message" id="message" rows="7" value="{{old('message')}}"></textarea>
               <div>{{ $errors->first('message') }}</div>
         </div>

         
         <div class="submit_btn">
               <button class="btn btn-success btn-lg">Send Message</button>
         </div>
      

      </form>
</div>
      


<footer class="footer container" id="social">
   <div class="row justify-content-between">
      <div class="col align-self-center">
          <p class="pull-left">© 2019 Metaa. All rights reserved.</p>
      </div>

      <div class="col align-self-center">
         <ul class="list-group list-group-horizontal">
            <li class="email"><a href="mailto:scott_kelly@metaa.co.uk?Subject=site%20message"><i class="fas fa-envelope"></i></a></li>
            <li class="github"><a href="https://github.com/scottkelly36"><i class="fab fa-github-square" target="_blank"></i></a></li>
            <li class="linkedin"><a href="https://www.linkedin.com/in/scott-kelly-b9b770aa/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
            <li class="facebook"><a href="https://www.facebook.com/Metaa-106901490710305" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
         </ul>
      
   </div>
</footer>
@endsection
