<div class="w3-container" id="about" style="padding-bottom:32px;">
  <div class="w3-content w3-card w3-padding">
    <h1 class="w3-center"><b>ABOUT ME</b></h1>
    <div class="w3-row">    
    <img src="../IMG_4192.JPG" class="w3-border w3-padding w3-col l8" alt="New Ulm Broadway Horse">
    <div class="w3-padding w3-col l4">
      <p>Hey there- I'm Hannah, a 20 something wife and mom living in the Twin Cities, MN. I'm married to my wonderful husband, Matt and we have one little guy named Summit. We love exploring in the Twin Cities and beyond. I'll be sharing our road trip adventures here on this blog, along with any other fun things we do as a family :) Hope you enjoy reading about our experiences!</p>
    </div>
    </div>
  </div>
</div>

<div class="w3-container" id="contact" style="padding-bottom:32px;">
  <div class="w3-content w3-card w3-padding">
    <h1 class="w3-center"><b>CONTACT ME</b></h1>
    <p>Do you know about a fun place we should check out in the Twin Cities and beyond? Feel free to contact me- I love hearing about your ideas!</p>
    <h5><a href="mailto:hannah@hannahbauman.com">hannah@hannahbauman.com</a></h5>
  </div>
</div>

<div class="w3-container" id="blog_list" style="padding-bottom:32px;">
  <div class="w3-content w3-card w3-padding">
    <h1 class="w3-center"><b>BLOG</b></h1>
    <p><a href="/2018-12-14_duluth/">2018-12-14 Duluth</a></p>
    <p><a href="/2018-08-22_state_fair/">2018-08-22 State Fair</a></p>
    <p><a href="/2018-08-04_nisswa/">2018-08-04 Nisswa, MN</a></p>
    <p><a href="/2018-05-21_red_wing/">2018-05-21 Red Wing, MN</a></p>
    <p><a href="/2018-03-26_lacrosse/">2018-03-26 Weekend Adventures in Wisconsin</a></p>
    <p><a href="/2018-03-11_new_ulm/">2018-03-11 A Day Trip to New Ulm, MN</a></p>
    <p><a href="/2018-02-18_mississippi/">2018-02-18 Mississippi River Adventures</a></p>
    <p><a href="/2018-01-27_hudson/">2018-01-27 Hudson Hot Air Affair</a></p>
  </div>
</div>

<script>
var slideIndex = [1,1,1,1,1];
var slideId = ["mySlides1", "mySlides2", "mySlides3", "mySlides4", "mySlides5"]
showSlides(1, 0);
showSlides(1, 1);
showSlides(1, 2);
showSlides(1, 3);
showSlides(1, 4);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
</script>