
<!-- Navbar   ================================================== -->
  
<?php  include("includes/navbar.php"); ?>
   

<?php
session_start();
if( isset($_SESSION['user_id']) && !empty(isset($_SESSION['user_id'])) )
{ header("location:user.php"); }
include("includes/header.php");
?>

<!-- Modals   ================================================== -->
<?php  include("modals/signup.php"); 
       include("modals/login.php");
       include("modals/view_blog.php");
       include("modals/post.php");
       include("modals/alert.php");
       ?>

<!-- Carousel ================================================== -->
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
<?php
   include("includes/carousel.php");
?>
           </div><!-- /.carousel -->


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing" >

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-lg-4 col-sm-4 card">
    <div style="    background: #2F2F2F; margin:1%">
      <img class="img-circle" src="assets/imgs/users/amy.jpg" alt="Generic placeholder image" width="140" height="140">
      </div>
      <h2 class="bloggerName">Lisa Stone</h2>
      <div style="    background: #2F2F2F; margin:1%"><a  class="btn btn-default viewDetails" data-toggle="collapse" href="#Collapse1" role="button" aria-expanded="false" aria-controls="Collapse1">View details &raquo;</a></div>
      <div class="collapse " id="Collapse1">
      <div class=" card-body">
      <h4 class="bloggerHeadings">Why she Started Blogging</h4>
     <p class="bloggerDetails">Started in 2005 as a labor of love by three bloggers, Her mission was to create opportunities for women who blog to pursue exposure, education, community and economic empowerment.</p>
     <h4 class="bloggerHeadings">Where she Is Now:</h4>
     <p class="bloggerDetails">BlogHer reaches more than 14 million women monthly through its conferences, Internet site and publishing networks.</p>
      </div>
    </div>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4 col-sm-4 card">
    <div style="    background: #2F2F2F; margin:1%">
      <img class="img-circle" src="assets/imgs/users/rose.png" alt="Generic placeholder image" width="140" height="140">
      </div>
      <h2 class="bloggerName">Heather B. Armstrong</h2>
      <div style="    background: #2F2F2F; margin:1%"><a class="btn btn-default viewDetails" data-toggle="collapse"  href="#Collapse2" role="button" aria-expanded="false" aria-controls="Collapse2">View details &raquo;</a></div>
      <div class="collapse " id="Collapse2">
      <div class=" card-body">
      <h4 class="bloggerHeadings">Why she Started Blogging</h4>
     <p class="bloggerDetails">She started her website in February 2001. A year later she was fired from her job for her website because she had written stories that included people in my workplace. When most people would fear the worse when hearing “your fired”, Heather just saw it as a challenge and took on blogging as a carerr.</p>
     <h4 class="bloggerHeadings">Where she Is Now:</h4>
     <p class="bloggerDetails">In October 2005 she began running enough ads on her website that her husband was able to quit his job and become a Stay at Home Father. Since running her blog she has found that she has a loyal readership and was able to publish two books so far.</p>
    </div>
    </div>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4 col-sm-4 card">
    <div style="    background: #2F2F2F; margin:1%">
      <img class="img-circle" src="assets/imgs/users/Jack.png" alt="Generic placeholder image" width="140" height="140">
    </div>
      <h2 class="bloggerName"> Gary Vaynerchuk</h2>
      <div style="    background: #2F2F2F; margin:1%"><a class="btn btn-default viewDetails" data-toggle="collapse"  href="#Collapse3" role="button" aria-expanded="false" aria-controls="Collapse3">View details &raquo;</a></div>
      <div class="collapse " id="Collapse3">
      <div class=" card-body">
      <h4 class="bloggerHeadings">Why He Started Blogging</h4>
     <p class="bloggerDetails">Gary Vaynerchuk’s story started as the co-owner of a wine store in New Jersey. He gained fame as the host of Wine Library TV, built his wine store into a multi-million dollar business.</p>
     <h4 class="bloggerHeadings">Where he Is Now:</h4>
     <p class="bloggerDetails">He has now signed a seven-figure book deal. He also is among one of the most sort after speakers for any marketing events.</p>
    </div>
    </div>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->

  <!-- START THE FEATURETTES -->

  <hr class="featurette-divider">

  <div class="row featurette">
  <div class="row featurette">
      <h2 class="featurette-heading bloggerName">A BRIEF HISTORY OF BLOGGING </h2><br>
    <div class="col-md-7">
      <h2 class="featurette-heading bloggerHeadings" >The Early Years</h2>
      <p class="lead bloggerDetails blackfont">It’s generally recognized that the first blog was Links.net, created by Justin Hall, while he was a Swarthmore College student in 1994. Of course, at that time they weren’t called blogs, and he just referred to it as his personal homepage.</p>
      <br>
      <p class="lead blackfont" >It wasn’t until 1997 that the term “weblog” was coined. 1998 marks the first known instance of a blog on a traditional news site, when Jonathan Dube blogged Hurricane Bonnie for The Charlotte Observer.</p>
      <br>
      <p class="lead blackfont">“Weblog” was shortened to “blog” in 1999 by programmer Peter Merholz.</p>
      
    </div>
    <div class="col-md-5"><br>
      <img style="box-shadow: 10px 10px #8a786d" class="featurette-image img-responsive center-block" src="assets/imgs/blogging.png" alt="image">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 col-md-push-5">
      <h2 class="featurette-heading bloggerHeadings">The Growth Period <span class="text-muted"></span></h2>
      <br>
      <p class="lead blackfont">The early 2000s were a period of growth for blogs. In 1999, according to a list compiled by Jesse James Garrett, there were 23 blogs on the internet. By the middle of 2006, there were 50 million blogs according to Technorati‘s State of the Blogosphere report. To say that blogs experienced exponential growth is a bit of an understatement.</p>
      <p class="lead blackfont">By 2001, there was enough interest in blogging that some how-to articles and guides started cropping up. Now, “meta blogs” (blogs about blogging) make up a sizable portion of the most popular and successful blogs out there.</p>
     </div>
    <div class="col-md-5 col-md-pull-7">
      <img style="box-shadow: 10px 10px #8a786d" class="featurette-image img-responsive center-block" src="assets/imgs/blog3.jpg" alt="image">
    </div>
  </div>
  <hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading bloggerHeadings">Blogs Reach the Mainstream <span class="text-muted"></span></h2>
    <br>
    <p class="lead blackfont">By the mid-2000s, blogs were reaching the mainstream. In January of 2005, a study was released saying that 32 million Americans read blogs. At the time, it’s more than ten percent of the entire population. The same year, Garrett M. Graff was granted White House press credentials, the first blogger ever to do so.</p>
    <p class="lead blackfont">The number of blogs grew even more, with more than 152 million blogs active by the end of 2010. </p>
 
  </div>
  <div class="col-md-5">
    <img style="box-shadow: 10px 10px #8a786d" class="featurette-image img-responsive center-block" src="assets/imgs/blogging1.png" alt="image">
  </div>
</div>
  <!-- /END THE FEATURETTES -->


  <!-- FOOTER -->
 <?php
   include("includes/footer.php");
 ?>