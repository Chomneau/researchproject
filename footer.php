
    <!-- footer -->

    <div id="footer">
    <div class="container">
      <div class="row">
          <?php
          include "include/connection.php";
          $select = "SELECT * FROM tbl_footer ORDER BY id DESC";
          $result = mysqli_query($conn, $select);
          $row = mysqli_fetch_assoc($result);
          ?>
          <div class="col-sm-4">
            <div class="foot-header">
              ABOUT US
            </div>
            <div class="foot-links">
              <p><?php echo $row['en_about']?></p>
            </div>
          </div><!--/col-sm-3-->
        <div class="col-sm-4">
          <div class="foot-header" style="padding-left: 25px"> Find us on </div>

          	<ul>
          	  <li><a href="<?php echo $row['facebook_url']?>" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a></li>
              <li><a href="<?php echo $row['twitter_url']?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
              <li><a href="<?php echo $row['youtube_url']?>" target="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i> Youtube</a></li>
          	</ul>

        </div>
        <div class="col-sm-4">
          <div class="foot-header" style="margin-left:25px">
            Contact
          </div>
          <div>
            <ul>
              <li><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $row['address']?></li>
              <li><i class="fa fa-phone-square" aria-hidden="true"></i> <?php echo $row['phone']?> </li>
              <li><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $row['email']?></li>
            </ul>
          </div>
        </div><!--/col-sm-3-->


      	</div><!--/row-->
      <div class="row">
        <center><img src="http://200.27.156.170/ean_default/img/cocha/footer-bg.png"></center>
        <div id="bottom-footer">
          <div class="row">
            <div class="col-md-8">
        	<a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="news.php">Event & Meeting</a>
            <a href="publication.php">Publication</a>
            <a href="education.php">Education & Research</a>
            <a href="policy.php">Policy & Advocacy</a>
            <a href="login.php">Login</a>

            </div>
            <div class="col-md-4 phone">
              <div class="pull-right">
                <span class="red"><i class="fa fa-phone-square" aria-hidden="true"></i> (+855)12 277 764</span>
              </div>

              </div>
        </div>
      </div><!--/row 2-->
          <div class="row" id="final-footer">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-4 text-center">

                  <p style="font-size:12px">&copy 2017 alright reversed  by <a href="http://crresearch.com">crcambodia.com</a> </p>

            </div>
            <div class="col-sm-4 text-right">
            	<span class="fa-stack fa-lg">
                  <i class="fa fa-circle text-primary fa-stack-2x"></i>
                  <a href="<?php echo $row['facebook_url']?>"><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></a>
                </span>
              <span class="fa-stack fa-lg">
                  <i class="fa fa-circle text-info fa-stack-2x"></i>
                  <a href="<?php echo $row['twitter_url']?>"><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></a>
                </span>
              <span class="fa-stack fa-lg">
                  <i class="fa fa-circle text-danger fa-stack-2x"></i>
                  <a href="<?php echo $row['youtube_url']?>"><i class="fa fa-youtube fa-stack-1x fa-inverse"></i></a>
                </span>
            </div>
          </div>
      </div><!--/container-->
    </div><!--/footer--></div>


  <div id="push"></div>


    <!-- end footer -->



    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/custom.js"></script>
  <script>/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/\>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script>







</body>
</html>
