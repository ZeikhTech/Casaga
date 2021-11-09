<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function( $ ){
  
  
  jQuery("#open1").click(function(){
      jQuery("#open1").hide();
      jQuery("#close1").show();
      var text2 = 'Close';
      jQuery("#bro-text span").text(text2);
 });  
  
  jQuery("#close1").click(function(){
      jQuery("#close1").hide();
      jQuery("#open1").show();
      var text2 = 'Browse';
      jQuery("#bro-text span").text(text2);
 });  
  
  
   jQuery("#open2").click(function(){
      jQuery("#open2").hide();
      jQuery("#close2").show();
      var text2 = 'Close';
      jQuery("#bro-text span").text(text2);
 });  
  
  jQuery("#close2").click(function(){
      jQuery("#close2").hide();
      jQuery("#open2").show();
      var text2 = 'Browse';
      jQuery("#bro-text span").text(text2);
 });  
  
  
});



</script>
<!-- end Simple Custom CSS and JS -->
