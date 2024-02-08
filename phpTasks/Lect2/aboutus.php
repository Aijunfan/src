<?php 
$title = "About Us";
include 'header.php';
?>

<h2>About Us</h2>

<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae numquam dicta quas ea. Aspernatur atque earum beatae possimus cum corporis praesentium sequi non sit? Accusantium dolores alias saepe nam quia?</p>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus asperiores culpa amet possimus accusantium eaque molestias optio quisquam, officia quo repudiandae adipisci sunt fuga consequuntur eius nulla vero excepturi consectetur.</p>

<script>
//This is a comment

document.write("Hello World")

//Triggering an alert box
// window.alert("This is an alert")

</script>

<noscript>
    If javascript is not enabled this will be displayed so users know they need to enable js.
</noscript>

<script>
    //document.write but after loading the page
    function hello(){
        document.write("This is after the page has loaded")
    }      
</script>
<button onclick="hello()">click me</button>
<!-- <button onclick="document.write('This is the same one')">click me</button> -->

<?php include 'footer.php';?>