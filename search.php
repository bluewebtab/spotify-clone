<?php
include("includes/includedFiles.php");

if(isset($_GET['term'])){
  // converts the url into a regular string
  $term = urldecode($_GET['term']);
  
}else{
  $term = "";
}
?>

<div class="searchContainer">
    <h4>Search for an artist, album or song</h4>
    <input type="text" class="searchInput" value="<?php echo $term; ?>" placeholder="Start typing..." onfocus="this.setSelectionRange(1000,1001)">

</div>

<script>
  $(".searchInput").focus()
  


$(function(){
  var search = document.querySelector(".searchInput")
  var timer;

  search.addEventListener('keyup', function(e){
    
    clearTimeout(timer);
    
    timer = setTimeout(function(){

      var val = $(".searchInput").val();
      openPage("search.php?term=" + val);

    }, 2000)
    
  })
})




</script>