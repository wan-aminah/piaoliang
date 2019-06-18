<html>
<head><title>Party Package</title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
	<?= $this->Html->css('font-awesome.min.css') ?>
	<?= $this->Html->script('bootstrap.min.js') ?>
	<?= $this->Html->script('jquery-3.3.1.slim.min') ?>
	<?= $this->Html->script('popper.min.js') ?>
	

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkztEGEx9SYsRQT2QpKlQoVyFZft0rt84&callback=initMap"
  type="text/javascript"></script>
  <style type="text/css">

    #map {
        width: 1000px;
        height: 600px;
     }
  </style>

  <script type="text/javascript">

      x = navigator.geolocation;

      x.getCurrentPosition(success, failure);

      function success(position)

      {
        var myLat = position.coords.latitude;
        var myLong = position.coords.longitude;

        //alert(myLat);

        var coords = new google.maps.LatLng(myLat,myLong);

        var mapOptions = {

          zoom:20,
          center: coords,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }

        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        var marker = new google.maps.Marker({map:map, position:coords});  
      }

      function failure(){ }

  </script>
</head>
<body>


<hr>
<center>
<br><br>
<table cellspacing="13" cellpadding="8" width="80%" ><br>
<tr><td bgcolor="white" colspan=2" align="center"><h1><font face="Trebuchet MS" color="black" bgcolor="white"><b>BIRTHDAY PARTY PACKAGES</b></font></h1></td></tr>
<tr><td></td></tr>

<tr><td bgcolor="turquoise" align="left"><font face="Arial Black" color="black" bgcolor="white" size="4"  width="50%"><b><u>CUSTOMER SERVICE</u></b></font></td></tr>
<tr><td bgcolor="honeydew"><font face="Arial" size="3"><b>Office Time: </b><br><img src="" height="3.5%"></img> 10 AM to 6 PM (Monday to Friday)<br></font>
<font face="Arial" size="3"><br><b>Contact us: </b><br><img src="" height="2%"></img> <a href = "mailto: party2u@gmail.com">party2u@gmail.com</a></font>
<font face="Arial" size="3" color="blue"><br><img src="" height="1.5%"></img> 03-55443523</font>
<font face="Arial" size="3" color="blue"><br><img src="" height="3.5%"></img> 017-6734564</font><br><br></td></tr><tr><td></td></tr>
</table>

<table cellspacing="13" cellpadding="8" width="80%"><br>
<tr><td bgcolor="lightsteelblue" align="center" width="50%"><font face="verdana" color="black" size="4"><b>Galaxy Theme</b></font><hr width="50%" size="5" noshade></td><td bgcolor="lightsteelblue" align="center"><font face="verdana" color="black" size="4"><b>Pirate Theme</b></font><hr width="50%" size="5" noshade></td></tr>
<tr><td bgcolor="lightcyan" align="center"><br><img src="img/galaxy.jpg" height="60%"></img><br><br>
<table width="60%">
<tr><td>
<b><ol><li>Partyware<br><br>Cake & Dinner Plates, Cups, Cutlery, Tablecloths</li><br>
<li>Decoration<br><br>Balloons, Banners, Confetti, Party Blowers & Hats, Wall Decorations</li><br>
<li>Goodie Bags/Boxes</li><br><li>Price = RM750</li></ol></b></td></tr></table><br><br></td>
<td bgcolor="lightcyan" align="center"><br><img src="img/pirate.jpg" height="60%"></img><br><br>
<table width="60%">
<tr><td>
<b><ol><li>Partyware<br><br>Cake & Dinner Plates, Cups, Cutlery, Tablecloths</li><br>
<li>Decoration<br><br>Balloons, Banners, Confetti, Party Blowers & Hats, Wall Decorations</li><br>
<li>Goodie Bags/Boxes</li><br><li>Price = RM600</li></ol></b></td></tr></table></td>
</tr>
<tr><td></td></tr>
<tr><td bgcolor="lightsteelblue" align="center"><font face="verdana" color="black" size="4"><b>Avengers Theme</b></font><hr width="50%" size="5" noshade></td><td bgcolor="lightsteelblue" align="center"><font face="verdana" color="black" size="4"><b>Vintage Theme</b></font><hr width="50%" size="5" noshade></td></tr>
<tr><td bgcolor="lightcyan" align="center"><br><img src="img/avengers1.jpg" height="12%"></img><br><br>
<table width="60%">
<tr><td>
<b><ol><li>Partyware<br><br>Cake & Dinner Plates, Cups, Cutlery, Tablecloths</li><br>
<li>Decoration<br><br>Balloons, Banners, Confetti, Party Blowers & Hats, Wall Decorations</li><br>
<li>Goodie Bags/Boxes</li><br><li>Price = RM800</li></ol></b></td></tr></table></td>
<td bgcolor="lightcyan" align="center"><br><img src="img/vintage.jpg" height="40%"></img><br><br>
<table width="60%">
<tr><td>
<b><ol><li>Partyware<br><br>Cake & Dinner Plates, Cups, Cutlery, Tablecloths</li><br>
<li>Decoration<br><br>Balloons, Banners, Confetti, Party Blowers & Hats, Wall Decorations</li><br>
<li>Goodie Bags/Boxes</li><br><li>Price = RM550</li></ol></b></td></tr></table></td>
</tr>
<tr><td></td></tr>
</table>

<table width="55%"><br>
<tr><td bgcolor="white" align="center"><font color="#008080" face="Arial Black" bgcolor="white" size="4"><b>CLIENT TESTIMONIALS</b></font></td></tr>
<tr><td bgcolor="white"><font face="Arial" size="3"><br><b>"Whole event was wonderful. We had a great time in the party. Kids loved the party." <i>-Mrs.Siti</i><br></font>
<font face="Arial" size="3"><br><b>"The team is dedicated and passionate about the work. I was surprised by all the extra work done beyond my booking. A real value for money." <i>-Ms.Farah</i><br></font>
<font face="Arial" size="3"><br><b>"Good people and very well organized party. These people take their work seriously." <i>-Mr.Abu</i><br></font>
<br></td></tr><tr><td></td></tr>
</table>

<table width="55%"><br>
<tr><td bgcolor="white" align="center"><font color="gold" face="Arial Black" bgcolor="white" size="4"><b>BOOK YOUR PARTY NOW!</b></font></td></tr>

<br></td></tr><tr><td></td></tr>
</table>
<br><br>
 
 
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Message $message
 */
?>
 <button><?= $this->Html->link(__('Book Now!'),['controller'=>'messages','action'=>'addd']); ?></button>
<br><br>
<div id="map"></div>
</center>


</body>
</html>