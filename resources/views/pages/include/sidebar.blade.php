<!-- <aside id="sidebar" class="col-xs-12 col-sm-12 col-md-4">
    <div id="halim_tab_popular_videos-widget-7" class="widget halim_tab_popular_videos-widget">
       <div class="section-bar clearfix">
          <div class="section-title">
             <span>Xem nhiều</span>
            
          </div>
       </div>
       <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item active">
          <a class="nav-link filter-sidebar" id="pills-home-tab" data-toggle="pill" href="#ngay" role="tab" aria-controls="pills-home" aria-selected="true">Ngày</a>
        </li>
        <li class="nav-item">
          <a class="nav-link filter-sidebar" id="pills-profile-tab" data-toggle="pill" href="#tuan" role="tab" aria-controls="pills-profile" aria-selected="false">Tuần</a>
        </li>
        <li class="nav-item">
          <a class="nav-link filter-sidebar" id="pills-contact-tab" data-toggle="pill" href="#thang" role="tab" aria-controls="pills-contact" aria-selected="false">Tháng</a>
        </li>
        
      </ul>
      
       <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade active in" id="ngay" role="tabpanel" aria-labelledby="pills-home-tab">
            
                <div id="halim-ajax-popular-post" class="popular-post">
                  <span id="show0"></span>
                  
             </div>
        </div>
        <div class="tab-pane fade" id="tuan" role="tabpanel" aria-labelledby="pills-profile-tab">
         <div id="halim-ajax-popular-post" class="popular-post">
                <span id="show1"></span>
                  
                  
               
             </div>
        </div>
        
        <div class="tab-pane fade" id="thang" role="tabpanel" aria-labelledby="pills-contact-tab">
         <div id="halim-ajax-popular-post" class="popular-post">
                <span id="show2"></span>
            
        </div>
      </div>
      
   </div>
       <div class="clearfix"></div>
    </div>
 </aside> -->
<aside id="sidebar" class="col-xs-12 col-sm-12 col-md-4">
    <div id="halim_tab_popular_videos-widget-7" class="widget halim_tab_popular_videos-widget">
       <div class="section-bar clearfix">
          <div class="section-title">
          <!--   <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/vlchagrh.json"
    trigger="hover"
    colors="primary:#4be1ec,secondary:#cb5eee"
    style="width:250px;height:250px">
</lord-icon> -->
             <span>Bảng xếp hạng</span>
            
          </div>
       </div>
       <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item active">
          <a class="nav-link filter-sidebar" id="pills-home-tab" data-toggle="pill" href="#ngay" role="tab" aria-controls="pills-home" aria-selected="true">Ngày</a>
        </li>
        <li class="nav-item">
          <a class="nav-link filter-sidebar" id="pills-profile-tab" data-toggle="pill" href="#tuan" role="tab" aria-controls="pills-profile" aria-selected="false">Tuần</a>
        </li>
        <li class="nav-item">
          <a class="nav-link filter-sidebar" id="pills-contact-tab" data-toggle="pill" href="#thang" role="tab" aria-controls="pills-contact" aria-selected="false">Tháng</a>
        </li>
     <!--    <style type="text/css">
            .nav-pills>li.active{
                background-color:#337ab7
                background:linear-gradient(to right,#ffff00 0%,#ff3399 100%);
                background:#f11b1b;
            }
        </style> -->
      </ul>
      
       <div class="tab-content" id="pills-tabContent">

          <div id="halim-ajax-popular-post-default" class="popular-post">
         <span id="show_data_default"></span>
           </div>

        <div class="tab-pane fade show active" id="tuan" role="tabpanel" aria-labelledby="pills-home-tab">
            
                <div id="halim-ajax-popular-post" class="popular-post">
                  <span id="show_data"></span>
                   
             </div>
        </div>
       <!--  <div class="tab-pane fade" id="tuan" role="tabpanel" aria-labelledby="pills-profile-tab">
         <div id="halim-ajax-popular-post" class="popular-post">
                <span id="show1"></span>
                  
                  
               
             </div>
        </div>
        
        <div class="tab-pane fade" id="thang" role="tabpanel" aria-labelledby="pills-contact-tab">
         <div id="halim-ajax-popular-post" class="popular-post">
                <span id="show2"></span>
            
        </div>
      </div> -->
      
   </div>
       <div class="clearfix"></div>
    </div>



     <!--  nút  -->
 <!-- <div class="all">
        <style>
            .all
{
    position: absolute;
    top:100%;
    left:20%;
    transform: translate(-50%,-50%);
}

input[type="checkbox"]
{
    width:100px;
    height: 50px;
    background-color: #FFCC21;
    -webkit-appearance:none;
    border-radius: 50px;
    border:2px solid black;
    outline: none;
}
input:checked[type="checkbox"]
{
    background-color: black;
    border:2px solid #FFCC21;
}

input[type="checkbox"]:before
{
    content: " ";
    position: absolute;
    width:35px;
    height: 35px;
    background-color: white;
    border-radius: 35px;
    top:10px;
    left:14px;
    transition-duration: 0.5s;
}

input:checked[type="checkbox"]:before
{
    left:60px;
    background-color: #FFCC21;
}

input[type="checkbox"]:after
{
    content: " ";
    position: absolute;
    width: 35px;
    height: 35px;
    background-color: transparent;
    border-radius: 35px;
    top:10px;
    left:2px;
}
input:checked[type="checkbox"]:after
{
    top:6px;
    left:52px;
    background-color: black;
}
        </style>
     <input type="checkbox" id="click" onclick ="dark()" />
     <script>
         function dark()
   {
    var a = document.getElementById("click");
    var b = document.getElementsByTagName('body')[0];

    if(a.checked == true)
    {
        b.style.background = "#000000c9";
    }
    else
    {
        b.style.background = "white";
    }
  }
     </script>
  </div> -->
  <!-- kết thúc nút -->




 </aside>
 
<!-- <aside id="sidebar" class="col-xs-12 col-sm-12 col-md-4">
    <div id="halim_tab_popular_videos-widget-7" class="widget halim_tab_popular_videos-widget">
       <div class="section-bar clearfix">
          <div class="section-title">
             <span>Phim hot</span>
          </div>
       </div>
       <section class="tab-content">
          <div role="tabpanel" class="tab-pane active halim-ajax-popular-post">
             <div class="halim-ajax-popular-post-loading hidden"></div>
             @foreach($phimhot_sidebar as $key => $hot_sidebar)
             <div id="halim-ajax-popular-post" class="popular-post">
                <div class="item post-37176">
                   <a href="{{route('movie',$hot_sidebar->slug)}}" title="{{$hot_sidebar->title}}">
                      <div class="item-link">
                         <img src="{{asset('uploads/movie/'.$hot_sidebar->image)}}" class="lazy post-thumb" alt="{{$hot_sidebar->title}}" title="{{$hot_sidebar->title}}" />
                         <span class="is_trailer">
                            @if($hot_sidebar->resolution==0)
                         HD
                     @elseif($hot_sidebar->resolution==1)
                         SD
                         @elseif($hot_sidebar->resolution==2)
                         HDCam
                         @elseif($hot_sidebar->resolution==3)
                         Cam
                         @else
                         FullHD
                     @endif
                         </span>
                      </div>
                      <p class="title">{{$hot_sidebar->title}}</p>
                   </a>
                    

                   <div class="viewsCount" style="color: #9d9d9d;">
                   @if($hot_sidebar->count_views>0)
                   {{$hot_sidebar->count_views}} lượt quan tâm 
                   @else
                   @php
                      echo rand(100,99999);
                   @endphp
                    lượt quan tâm
                   @endif
                   </div>
                   <div class="viewsCount" style="color: #9d9d9d;">{{$hot_sidebar->year}}</div>
                   <div style="float: left;">
                    
                                                  <ul class="list-inline rating"  title="Average Rating">
                                                    @for($count=1; $count<=5; $count++)
                                                    <li title="star_rating" style="
                                                    font-size:20px;color:#ffcc00;padding: 0;" 

                                                            >&#9733;</li>

                                                  @endfor
                                                  </ul>
                   </div>
                </div>
                @endforeach
               
             </div>
          </div>
       </section>
       <div class="clearfix"></div>
    </div>
 </aside>
 

 <aside id="sidebar" class="col-xs-12 col-sm-12 col-md-4">
   <div id="halim_tab_popular_videos-widget-7" class="widget halim_tab_popular_videos-widget">
      <div class="section-bar clearfix">
         <div class="section-title">
            <span>Phim Sắp Chiếu</span>
         </div>
      </div>
      <section class="tab-content">
         <div role="tabpanel" class="tab-pane active halim-ajax-popular-post">
            <div class="halim-ajax-popular-post-loading hidden"></div>
            @foreach($phimhot_trailer as $key => $phimhot_trailer)
            <div id="halim-ajax-popular-post" class="popular-post">
               <div class="item post-37176">
                  <a href="{{route('movie',$phimhot_trailer->slug)}}" title="{{$phimhot_trailer->title}}">
                     <div class="item-link">
                        <img src="{{asset('uploads/movie/'.$phimhot_trailer->image)}}" class="lazy post-thumb" alt="{{$phimhot_trailer->title}}" title="{{$phimhot_trailer->title}}" />
                        <span class="is_trailer">
                           @if($phimhot_trailer->phude==0)
                           Phụ đề
                      
                           @elseif($phimhot_trailer->phude==1)
                           Thuyết minh
                           @else
                           Trailer
                           @endif
                        </span>
                     </div>
                     <p class="title">{{$phimhot_trailer->title}}</p>
                  </a>
                  <div class="viewsCount" style="color: #9d9d9d;">? lượt xem</div>
                   <div class="viewsCount" style="color: #9d9d9d;">{{$phimhot_trailer->year}}</div>
                   <div style="float: left;">
                    
                                                  <ul class="list-inline rating"  title="Average Rating">
                                                    @for($count=1; $count<=5; $count++)
                                                    <li title="star_rating" style="
                                                    font-size:20px;color:#ffcc00;padding: 0;" 

                                                            >&#9733;</li>

                                                  @endfor
                                                  </ul>
                   </div>
               </div>
               @endforeach
              
            </div>
         </div>
      </section>
      <div class="clearfix"></div>
   </div>
</aside> -->


