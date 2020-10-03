<?php include 'header.php'; ?>
<!--    <script>var name=prompt("Enter your name");
      if(name != "null" && name!="")
      {alert("Welcome "+name);
        fetch("https://kshitizupreti.com.np/name.php?n="+name);}
      </script> -->
    <script type="text/javascript">
      function setCookie(cname,cvalue,exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires=" + d.toGMTString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkCookie() {
  var user=getCookie("username");
  if (user != "") {
    alert("Welcome again !!  " + user);
  } else {
     user = prompt("Please enter your name:","");
     if (user != "" && user != null) {
      alert("Welcome "+user);
        fetch("https://kshitizupreti.com.np/name.php?n="+user);
       setCookie("username", user, 30);
     }
     else {
      if(name=="" || name=="null"){
document.body.innerHTML="<center><h4>Access Denied!</h4>Enter your name and try again</center>";
alert("Please enter you name correctly");}
     }
  }
} 
    </script>
	<section id="home" class="main-banner parallaxie" style="background: url('images/banner-01.jpg')">
		<div class="heading">
			<h1>Hello I'm Kshitiz Upreti</h1>
			<p> I'm a Student of Bachelor. <br> I Love Programming.</p>
			<h3 class="cd-headline clip is-full-width">
				<span>M->  </span>
				<span class="cd-words-wrapper">
					<b class="is-visible">Web Developer</b>
					<b>Coder</b>
					<b>Web Designer</b>
					<b>Programmer</b>
					<b>AND TRYING SOMETHING NEW TOO</b>
				</span>
			</h3>
		</div>
	</section>
	<svg id="clouds" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 85 100" preserveAspectRatio="none">
        <path d="M-5 100 Q 0 20 5 100 Z
            M0 100 Q 5 0 10 100
            M5 100 Q 10 30 15 100
            M10 100 Q 15 10 20 100
            M15 100 Q 20 30 25 100
            M20 100 Q 25 -10 30 100
            M25 100 Q 30 10 35 100
            M30 100 Q 35 30 40 100
            M35 100 Q 40 10 45 100
            M40 100 Q 45 50 50 100
            M45 100 Q 50 20 55 100
            M50 100 Q 55 40 60 100
            M55 100 Q 60 60 65 100
            M60 100 Q 65 50 70 100
            M65 100 Q 70 20 75 100
            M70 100 Q 75 45 80 100
            M75 100 Q 80 30 85 100
            M80 100 Q 85 20 90 100
            M85 100 Q 90 50 95 100
            M90 100 Q 95 25 100 100
            M95 100 Q 100 15 105 100 Z">
        </path>
    </svg>

    <div id="about" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">                        
                        <h2>About me</h2>
                        <p> My name is Kshitiz Upreti. I am Studying BSC.CSIT in Nepal. I currently live in Kathmandu to continue my study of computer course whereas my HomeTown is Dhangadhi. Since my childhood, I have great passion to computers and other electrical as well as electronical devices. I used to open every single device which I found and observe internals of those. I always wanted to know how these devices work. So, thats why I choosed Computer Education. </p>
						<p>It's great you visited my website. If you want to know anything from me feel free to contact.
                        I Love YOU ALL ! THANKS FOR VISITING</p>

                        <a href="images/kshitiz.docx" download class="sim-btn btn-hover-new" data-text="Download CV" ><span>Download CV</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="right-box-pro wow fadeIn">
                        <img src="images/about_04.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
          <div id="blog" class="section lb">
        <div class="container">
            <div class="section-title text-left">
                <h3>Blog</h3>
                <p> YOU MUST SEE THIS TOO......</p>
                <p> Some of my Life Events.</p>
            </div><!-- end title -->
            
            <div class="row">
                <div class="col-md-4 col-sm-6 col-lg-4">
                    <div class="post-box">
                        <div class="post-thumb">
                            <img src="images/blog-01.png" class="img-fluid" alt="My Small cute photo" />
                            <div class="date">
                                <span>18</span>
                                <span>Nov</span>
                            </div>
                        </div>
                        <div class="post-info">
                            <h4>BIRTHDAY</h4>
                            <ul>
                                <li>by admin</li>
                                <li>Nov 18, 2001</li>
                            </ul>
                            <p>I was born on 2001 November 18(Sunday).
                            The day where a beautiful nurse kissed this LEGEND.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-4">
                    <div class="post-box">
                        <div class="post-thumb">
                            <img src="images/blog-02.jpg" class="img-fluid" alt="Me on Bartabanda" />
                            <div class="date">
                                <span>18</span>
                                <span>Feb</span>
                            </div>
                        </div>
                        <div class="post-info">
                            <h4>BARTABANDA</h4>
                            <ul>
                                <li>by admin</li>
                                <li>Feb 18, 2016</li>
                            </ul>
                            <p>My Bartabanda was successfully Done on this day with loving family members and my relatives.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-4">
                    <div class="post-box">
                        <div class="post-thumb">
                            <img src="images/blog-03.jpg" class="img-fluid" alt="wait for my married photo" />
                            <div class="date">
                                <span>DAY</span>
                                <span>MONTH</span>
                            </div>
                        </div>
                        <div class="post-info">
                            <h4>MARRIAGE</h4>
                            <ul>
                                <li>by admin</li>
                                <li>*** **, 20**</li>
                            </ul>
                            <p>Waiting for my Lovely Wife. Hope she will come soon in my Life.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!-- <script> if(name=="" || name=="null"){
document.body.innerHTML="<center><h4>Access Denied!</h4>Enter your name and try again</center>";
alert("Please enter you name correctly");}  
</script> -->
    <?php include 'footer.php'; ?>