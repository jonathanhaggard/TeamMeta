<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Meta:SF</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="favicon.png">

</head>
<body>
<?php include 'team.php';?>
<div class="menu fixed" id="menu">
<svg version="1.1" id="menu" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
 viewBox="0 0 612 792" enable-background="new 0 0 612 792" xml:space="preserve">
<g>
<path d="M592.5869,184.9565V403.765L306,275.2918L19.4131,403.765V184.9565L306,0L592.5869,184.9565z M592.5869,573.1738V792
    L306,663.5444L19.4131,792V573.1738L306,388.2369L592.5869,573.1738z"/>
</g>
</svg>
</div>
<?php include 'brady.php';?>
<?php include 'geoff.php';?>


    
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
    
$imageToggle = $(".like")
$view = 'viewItem last'

$imageToggle.hover(
  function () {
  $imageToggle.removeClass($view);
    
  $(this).addClass($view).siblings(".like").addClass("not");
    
  $bgimg = $(this).data("bg")
    
  $(this).closest('.member').find('.imageinsert').css("background", $bgimg ).addClass('fade');
  
}
    
  ,function(){
  $(this).closest('.member').find('.imageinsert').css("background", '' ).removeClass('fade'); 
  $imageToggle.removeClass($view).siblings(".like").removeClass("not");
}              
);
    
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 600);
        return false;
      }
    }
  });
});    
    

$('#menu').click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;

});    

</script>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
