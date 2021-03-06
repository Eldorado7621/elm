@include('pw/layouts.header')
@include('pw/layouts.menu')
    <div class="py-5 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>Benefit of health tips</h3>
            <p>Category description here.. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam error eius quo, officiis non maxime quos reiciendis perferendis doloremque maiores!</p>
          </div>
        </div>
      </div>
    </div>
	
    <div class="site-section bg-white">
      <div class="container">
        <div class="row">
		 @foreach($pregHealthTips as $pregHealthTip)
          <div class="col-lg-4 mb-4">
            <div class="entry2">
              <a href="{{route('pregTip',['id'=>$pregHealthTip->id])}}"><img src="upload/{{$pregHealthTip->picture}}" alt="Image" class="img-fluid rounded"></a>
              <div class="excerpt">
              <span class="post-category text-white bg-secondary mb-3">Politics</span>

              <h2><a href="single.html"><span>{{$pregHealthTip->subject}}</span>.</a></h2>
              <div class="post-meta align-items-center text-left clearfix">
                <span>&nbsp;-&nbsp; {{date("d-M-Y",strtotime($pregHealthTip->created_at))}}</span>
              </div>
              
                <p>{{Str::limit($pregHealthTip->body,70)}}.</p>
                <p><a href="#">Read More</a></p>
              </div>
            </div>
           </div>
		  @endforeach
         </div>
		 <div class="row text-center pt-5 border-top">
          <div class="col-md-12">
            <div class="custom-pagination">
             {{$pregHealthTips->links()}}
            </div>
          </div>
         </div>
       </div>
    </div>
	 <div class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3 class="footer-heading mb-4">About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reprehenderit magnam deleniti quasi saepe, consequatur atque sequi delectus dolore veritatis obcaecati quae, repellat eveniet omnis, voluptatem in. Soluta, eligendi, architecto.</p>
          </div>
          <div class="col-md-3 ml-auto">
            <!-- <h3 class="footer-heading mb-4">Navigation</h3> -->
            <ul class="list-unstyled float-left mr-5">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Advertise</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Subscribes</a></li>
            </ul>
            <ul class="list-unstyled float-left">
              <li><a href="#">Travel</a></li>
              <li><a href="#">Lifestyle</a></li>
              <li><a href="#">Sports</a></li>
              <li><a href="#">Nature</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            

            <div>
              <h3 class="footer-heading mb-4">Connect With Us</h3>
              <p>
                <a href="#"><span class="icon-facebook pt-2 pr-2 pb-2 pl-0"></span></a>
                <a href="#"><span class="icon-twitter p-2"></span></a>
                <a href="#"><span class="icon-instagram p-2"></span></a>
                <a href="#"><span class="icon-rss p-2"></span></a>
                <a href="#"><span class="icon-envelope p-2"></span></a>
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
          </div>
        </div>
      </div>
    </div>