  <button type="submit" class="shadowi" href=""><span><i class="fa fa-search"></i></span></button>
                  <style type="text/css">
   /* <lord-icon
       src="https://cdn.lordicon.com/rlizirgt.json"
    trigger="loop"
    delay="2000"
    colors="primary:#ffffff"
    style="width:25px;height:25px;margin-top: 10px;">
</lord-icon>   */              *

#header{
     display: flex;
      justify-content:center;
     align-items:center;
       min-height:10vh;
     background:#000;
}
button.shadowi{
    position: relative;
    width: 160px;
    height: 50px;
    line-height: 48px;
    background: #000;
    text-transform: uppercase;
    font-size: 17.5px;
    letter-spacing: 4px;
    text-decoration: none;
    -webkit-box-reflect: below 1px linear-gradient
    (transparent, #0004);

 }
button.shadowi::before
  {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg,#fb0094,#00f,#0f0,#ff0,#f00,#fb0094,#00f,#0f0,#ff0,#f00);
    background-size: 400%;
    opacity: 0;
    transition: 0.5s;
     animation: animate 20s linear infinite;
  }
  button.shadowi::after{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg,#fb0094,#00f,#0f0,#ff0,#f00,#fb0094,#00f,#0f0,#ff0,#f00);
    background-size: 400%;
    opacity: 0;
    filter: blur(20px);
    transition: 0.5s;
    animation: animate 20s linear infinite;
             
  }
  button.shadowi:hover::before,
  button.shadowi:hover::after
  {
    opacity: 1;
  }
  @keyframes animate
  {
       0%
       {
          background-position: 0 0;
       }
       50%
       {
          background-position: 300% 0;
       }
       100%
       {
          background-position: 0 0;
       }
  }



 button.shadowi span
 {
    position: absolute;
    display: block;
    top: 1px;
    left: 1px;
    right: 1px;
    bottom: 1px;
    text-align: center;
    background: #0c0c0c;
    color: rgba(255,255,255,0.2);
    transition: 0.5s;
    z-index: 1;;

 }
 button.shadowi:hover span
 {
    color: rgba(255,255,255,1);

 }
  button.shadowi span::before
  {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 100%;
    bottom: 50%;
    background: rgba(255,255,255,0.1);
             
  }
                  </style>

                  <!-- đăng nhập -->
                   <style type="text/css">
   
a.Dangnhap{
    position: relative;
    width: 160px;
    height: 50px;
    line-height: 48px;
    background: #000;
    text-transform: uppercase;
    font-size: 17.5px;
    letter-spacing: 4px;
    text-decoration: none;
    -webkit-box-reflect: below 1px linear-gradient
    (transparent, #0004);

 }
a.Dangnhap::before
  {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg,#fb0094,#00f,#0f0,#ff0,#f00,#fb0094,#00f,#0f0,#ff0,#f00);
    background-size: 400%;
    opacity: 0;
    transition: 0.5s;
     animation: animate 20s linear infinite;
  }
  a.Dangnhap::after{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg,#fb0094,#00f,#0f0,#ff0,#f00,#fb0094,#00f,#0f0,#ff0,#f00);
    background-size: 400%;
    opacity: 0;
    filter: blur(20px);
    transition: 0.5s;
    animation: animate 20s linear infinite;
             
  }
  a.Dangnhap:hover::before,
  a.Dangnhap:hover::after
  {
    opacity: 1;
  }
  @keyframes animate
  {
       0%
       {
          background-position: 0 0;
       }
       50%
       {
          background-position: 300% 0;
       }
       100%
       {
          background-position: 0 0;
       }
  }



 a.Dangnhap span
 {
    position: absolute;
    display: block;
    top: 1px;
    left: 1px;
    right: 1px;
    bottom: 1px;
    text-align: center;
    background: #0c0c0c;
    color: rgba(255,255,255,0.2);
    transition: 0.5s;
    z-index: 1;;

 }
 a.Dangnhap:hover span
 {
    color: rgba(255,255,255,1);

 }
  a.Dangnhap span::before
  {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 100%;
    bottom: 50%;
    background: rgba(255,255,255,0.1);
             
  }
                  </style>