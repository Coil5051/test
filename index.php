


<?php

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Iphone magazin</title>
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="adaptive.css">
</head>
<body>
<div id="main">
 <div id="header">
 <a href="#"><div id="logo"></div></a>
 
 <div id="search">
 <div id="lup"></div>
 <form action="index.php" name="MyForm">
 
 <input id="searchform" type="text" name="search" placeholder="���-�� �����?"/>
 
 <input id="searchbut" type="submit" value="�����"/>
 
 
 
 </form>
 
 
 
     </div>
 
 <div id="registration">
 <div id="logo2"></div>
 <div id="exit"><a href="#">�����</a> | <a href="#">�����������������</a></div>
 
 </div>
 </div>
 <div class="slides">
    <ul>
        <li><img src="img/56ac99a09ee13.jpg" alt="image01" />

        </li>
        <li><img src="img/image3.jpeg" alt="image02" />

        </li>
        <li><img src="img/ipad4.jpg" alt="image03" />

        </li>
        <li><img src="img/verge6.jpg" alt="image04" />

        </li>
    </ul> 
</div>
<div id="firstnew"><marquee>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</marquee></div>
<div id="secondnew"></div>
<nav id="backg">
    <ul class="cf">
        <li><a href="#">��������</a></li>
        <li><a class="dropdown" href="#">���������</a>
            <ul>
                <li><a href="#">Ipad</a></li>
                <li><a href="#"></a></li>
                <li><a href="#">�����</a></li>
            </ul>
            </li>
        <li><a href="#">��������</a></li>
        <li><a href="#">������������ ����������</a></li>
        <li><a href="#">����������</a></li>
        <li><a href="#">�������� ����</a></li>
        
    </ul>
</nav>
 <div id="content">
 <div id="leftnews">
 
 <div id="price">
 
<div id="topprice">����:</div> 
<div id="inprice">
<div id="inprice-left">

<input class="inpp" />

</div>

-


<div id="inprice-right"></div>

<input class="inpp" /> ���.


 </div>
 
 
 
 </div>
 <div id="scolor">
 ����
 </div>
 <div id="feature">
 <div id="topfeatures"><img src="img/triangle.png" id="triangle">����������</div>
 <div id="features"> 
 

 
 <input type="checkbox"> <u>���������� 1</u> <br />
 
 <input type="checkbox"> <u>���������� 2</u> <br />
<input type="checkbox"> <u>���������� 3</u>
 
 
 
 </div>
 
 </div>
 
 
 
 
 
 
 
 
 
 
 
 </div>
 
 
  
 <script>
 var a
 a=0;
 
    document.getElementById('topfeatures').onclick = function(){
        if (!a){
        document.getElementById('features').style.display = 'block';
        document.getElementById('triangle').style.transform = 'rotate(-90deg)';
        a=1;
        }
        else{
            document.getElementById('features').style.display = 'none';
        document.getElementById('triangle').style.transform = 'rotate(0deg)';
        a=0;   
        }
    }
 
 </script>
 
 
 
 <div id="katlog">
 <div class="tovar">
 <div class="nametovar">
 <center><h1><b>Iphone 6S</b></h1></center>
 </div>
 <div class="about">
 <div class="imgtov"></div>
 <div class="opis">
 <div class="nameop"></div>
 <div class="slims">
     <div class="idbutt">
     <div class="idtov">
     <p style="font-size:12px;">
     ��� ������:<br>
     ����:
     </p>
     </div>
     <div class="buttons">
     <a href="#"><div class="buttonwant"><center><b>����!</b></center></div></a>
     <a href="#"><div class="buttoninfo"><center><b>�����������</b></center></div></a><br />
     
     
     </div>
     
     </div>
     <div class="fitchers">
        <p style="font-size:12px;"><b>����������</b><br />
        ����:<br />
        ����:<br />
        ���:
     </p>
     
     </div>
     <div class="nalich">
     
     <p class="agt"><a href="#"><b>� �������</b></a></p>
     
     </div>
 </div>
  <div class="otziv"><a href="#">73 �������</a></div>
 </div>
 </div>
 </div>
 

 
 
 </div>
 <div id="rightnews">
 <div class="news1"></div>
 <div class="news2"></div>
 
 </div>
 
 
 </div>

<div id="footer">
<div id="left_foot">
<div id="about_as"> � ���</div>
<div id="about_bottom">

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolo 


</div>





</div>
<div id="mid_foot">
<div id="kategories">������� �������</div>
<div id="kategories_bottom">

<div class="katalogs">

<ul class="katalog_op">
<a href="#"><li> ���������</li></a>
<a href="#"><li> ��������</li></a>
<a href="#"><li> ����������</li></a>
</ul>




</div>
<div class="katalogs">

<ul class="katalog_op"> 
<a href="#"><li> ��������</li></a>
<a href="#"><li>���������� ��</li></a>
<a href="#"><li>�������� ����</li></a>
</ul>





</div>





</div>



</div>
<div id="social_foot">

   <div id="social_top"> ��������������� � ���!</div>
   <div id="social_bottom">
   
           <a href="#"><div class="social_net" style="background-image: url(img/Social/rsscopy.png);"></div></a>
            <a href="#"> <div class="social_net" style="background-image: url(img/Social/fcopy.png);"></div></a>
            <a href="#"> <div class="social_net" style="background-image: url(img/Social/twittercopy.png);"></div></a>
            <a href="#"> <div class="social_net" style="background-image: url(img/Social/gpluscopy.png);"></div></a>
            <a href="#"> <div class="social_net" style="background-image: url(img/Social/incopy.png);"></div></a>
           <a href="#">  <div class="social_net" style="background-image: url(img/Social/youtubecopy.png);"></div></a>
            <a href="#"> <div class="social_net" style="background-image: url(img/Social/vimeocopy.png);"></div></a>
   
   
   
   </div>




</div>
<div id="right_foot">


<div id="contact_top"> ���� ��������</div>
<div id="contact_bottom"> 

Phone: 800 123 53 48<br /><br />
Email: info@baer.com


</div>





</div>
</div>


</div>
</body>
</html>