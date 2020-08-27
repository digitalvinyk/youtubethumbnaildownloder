<!DOCTYPE html>
<html>
<head>
<title>Title Here</title>
<meta name="Description" content="">
<meta name="Keywords" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
</head>
<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- Button to Open the About Page Modal -->
<center>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#about-page">
  About Page
</button>

<!-- Button to Open the Contact Page Modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Contact-Us">
  Contact Us
</button>

<!-- Button to Open the Privacy Page Modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#privacy-page">
  Privacy Policy
</button>
</center>

<!-- About page Modal -->
<!-- The Modal -->
<div class="modal" id="about-page">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">About Page</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

About

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!-- End About page Modal -->

<!-- Contact Modal -->
<!-- The Modal -->
<div class="modal" id="Contact-Us">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Contact Us</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       
	   Contact
	   
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!-- End privacy page Modal -->

<!-- privacy page Modal -->
<!-- The Modal -->
<div class="modal" id="privacy-page">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Privacy Page</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
		Privacy Policy
		
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!-- End privacy page Modal -->

<!-- Heading & Description -->
<hr>
<h1 style="text-align:center;">Heading Please</h1></hr>
<center>
<p>
Description
</p>

<!-- Heading & Description -->

  <div dir="ltr" style="text-align: center;" trbidi="on">
<p><span style="color: #3d85c6; font-family: arial; font-size: xx-large; font-weight: bold;">Enter Your YouTube URL below</span></p></div>
  
  
                           <input class="searchbar" id="yt" placeholder="https://youtu.be/yTDbaXkuvb0;" style="width: 80%;" type="text" value="" /><div class="input-group"><span style="font-size: x-small;">&nbsp;</span></div><div class="input-group"><span class="input-group-btn">
  
  <button class="btn btn-primary" id="videoButton" onclick="GETIMAGES();" type="button">Get YouTube Thumbnail</button>
  </span>
                   </div>
				
                    <div id="Showdata" style="display: none;">
                        Video Thumbnail : Four Small Thumbnails (120x90) <br />
                        <img alt="Small Thumbnail" id="bdea" src="" title="Small Thumbnail" />
                        <img alt="Small Thumbnail" id="b2" src="" title="Small Thumbnail" />
                        <img alt="Small Thumbnail" id="b3" src="" title="Small Thumbnail" />
                        <img alt="Small Thumbnail" id="b4" src="" title="Small Thumbnail" /><br />
                        <p>[ <a download="default.jpg" href="#" id="a1">Download</a> ] / [ Right click Save Image as ] / [ Copy the url ]
                            <input class="form-control input-sm" id="s1" onclick="this.select()" readonly="readonly" type="text" />
                        </p>
                        <hr />
                        Video Thumbnail : Medium Quality (320x180) <br />
                        <img alt="Medium Quality" id="b6" src="" title="Medium Quality" /><br />
                        <p>[ <a download="mqdefault.jpg" href="#" id="a6">Download</a> ]  / [ Right click Save Image as ] / [ Copy the url ]
                            <input class="form-control input-sm" id="s6" onclick="this.select()" readonly="readonly" type="text" /></p>
                        <hr />
                        Video Thumbnail : High Quality (480x360)  <br />
                        <img alt="High Quality" id="b5" src="" title="High Quality" /><br />
                        <p>[ <a download="hqdefault.jpg" href="#" id="a5">Download</a> ] / [ Right click Save Image as ] / [ Copy the url ]
                            <input class="form-control input-sm" id="s5" onclick="this.select()" readonly="readonly" type="text" /></p>
                        <hr />
                        Video Thumbnail : High Resolution / Definition (1280x720) <br />
                        <img alt="High Resolution" id="b7" src="" title="High Resolution" />
                        <p>[ <a download="maxresdefault.jpg" href="#" id="a7">Download</a> ] / [ Right click Save Image as ] / [ Copy the url ]
                        <input class="form-control input-sm" id="s7" onclick="this.select()" readonly="readonly" type="text" /></p>
                    </div>
                    <div id="iHelp">
                        <br />
                        <h2 class="text-primary head" style="font-weight: bold;">   How to use YouTube Thumbnail Image Downloader</h2>
                        <p style="font-weight: bold;">Step 1 : Go to www.YouTube.com, Search a video.</p>
                        <p style="font-weight: bold;">Step 2 : Copy the URL of the video (Example: https://www.youtube.com/watch?v=3nmnMtbzzjE ).</p>
                        <p style="font-weight: bold;">Step 3 : Paste that URL in the box given above and then click the "Get YouTube Thumbnail" button.</p>
                        <p style="font-weight: bold;">Step 4 : Choose your Thumbnail size and Download it.</p>
                    </div>
                </div>
            </div>
        </div>

</center>

<hr/>
<center>
<!-- Paste Details Here -->

 <h1>Heading Please</h1>
 <p>Details</p> 
 <p>Details2</p> 
 <hr/></center>
 
 <!-- Paste Details Here -->
 
 <center><div class="py-4 text-center bg-white">
    <p>
      &copy; 2019 - <span id="copy-year">2020</span> Copyright by
      <a class="fancy text generator" href="">YouTube Thumbnail Download</a>
	</p>
  </div></center>
  
   <script type="text/javascript">
            function saveImageAsJpg(name, adress) {
                var background = new Image();
                background.src = "http://i.imgur.com/yf6d9SX.jpg";
               
               // alert(name);
                var c = document.getElementById("myCanvas");
                alert(c);
                var ctx = c.getContext("2d");
                alert(ctx);
                background.onload = function () {
                    ctx.drawImage(background, 0, 0);
                }
                var a = document.createElement('a');
                // var img = document.getElementById("a7"); onclick="saveImageAsJpg('test', 'http://img.youtube.com/vi/ZGycniztgi4/mqdefault.jpg')"
               // alert(img);
                //  ctx.drawImage(img, 10, 10);
                a.href = document.getElementById("myCanvas").toDataURL();
                a.download = "wrwrwer";
               // alert(c.toDataURL());
              //     alert(adress);
               
                var a = document.createElement('a');
                a.href = "http://img.youtube.com/vi/ZGycniztgi4/mqdefault.jpg";
                a.download = "mqdefault.png";
            //    a.setAttribute('href', 'data:image/jpg;charset=utf-8,' + ("http://img.youtube.com/vi/ZGycniztgi4/mqdefault.jpg"))
            //    a.setAttribute('download', filename);
                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);
            }
            function GETIMAGES() {
                url = document.getElementById('yt').value;
                if (url.trim() == '') {
                    alert('Please enter youtube video url');
                    return false;
                }
                var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
                var match = url.match(regExp);
                if (match && match[7].length == 11) {
                    document.getElementById('Showdata').style.display = "block";
                    bdea.src = 'http://img.youtube.com/vi/' + match[7] + '/default.jpg';
                    b2.src = 'http://img.youtube.com/vi/' + match[7] + '/1.jpg';
                    b3.src = 'http://img.youtube.com/vi/' + match[7] + '/2.jpg';
                    b4.src = 'http://img.youtube.com/vi/' + match[7] + '/3.jpg';
                    b5.src = 'http://img.youtube.com/vi/' + match[7] + '/hqdefault.jpg';
                    b6.src = 'http://img.youtube.com/vi/' + match[7] + '/mqdefault.jpg';
                    b7.src = 'http://img.youtube.com/vi/' + match[7] + '/maxresdefault.jpg';
                    a5.href = 'http://img.youtube.com/vi/' + match[7] + '/hqdefault.jpg';
                    a6.href = 'http://img.youtube.com/vi/' + match[7] + '/mqdefault.jpg';
                    a7.href = 'http://img.youtube.com/vi/' + match[7] + '/maxresdefault.jpg';
                    a1.href = 'http://img.youtube.com/vi/' + match[7] + '/default.jpg';
                    document.getElementById("s1").value = document.getElementById('a1').href;
                    document.getElementById("s6").value = document.getElementById('a6').href;
                    document.getElementById("s5").value = document.getElementById('a5').href;
                    document.getElementById("s7").value = document.getElementById('a7').href;
                }
                else {
                    document.getElementById('Showdata').style.display = "none";
                    alert('No YouTube video image found this url, Please try again...');
                    return false;
                }
            }
        </script>
   

</body>
</html>
