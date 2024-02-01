<?php 
$title = "New One Page";
include'header.php'; ?>

<h2>Hello world this a new page</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, libero. Dolores excepturi ipsa fugit error aspernatur. Praesentium rem nemo architecto repudiandae perspiciatis aspernatur, a laborum quis eius exercitationem. Fugiat, provident!</p>

<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, id explicabo non minus, reprehenderit cumque quidem debitis doloribus voluptatum corporis vel ad alias ratione, deleniti quam? Praesentium accusamus illo voluptates.</p>

<!-- 3.8  -->
<?php
    $filename = __FILE__;
    $lastModifiedTime = filemtime($filename);
    $formattedTime = date('Y-m-d H:i:s', $lastModifiedTime);
    $baseFilename = basename($filename);
?>

<?php include 'footer.php';?>