<footer class="footer1">
        <p>Follow Us</p>
        <p>Be the first to know about new products, exclusives and special offers!</p>
        <div class="footer-icons">
            <img src="image/LOGO/facebook_.png" alt="fb" >
            <img src="image/LOGO/youtube_.png" alt="youtube">
            <img src="image/LOGO/twitter_.png" alt="twitter">
            <img src="image/LOGO/instagram_.png" alt="inst">
            <img src="image/LOGO/sina-weibo_.png" alt="weibo">
        </div>
            
    <!-- 3.8  -->
    <?php

        $filename = $_SERVER['SCRIPT_FILENAME'];
        $lastModifiedTime = filemtime($filename);
        $formattedTime = date('Y-m-d H:i:s', $lastModifiedTime);
        $baseFilename = basename($filename);
        echo "<p> $baseFilename was last modified on:$formattedTime</p>";
    ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    </footer>

    <footer class="footer2">
      
        <div class="Get-know">
            <h5>Get to know us</h5>
            <ul>
                <li>Contact Information</li>
                <li>Careers</li>
                <li><a href=#>About us</a></li>
            </ul>
        </div>
        <div class="Support">
            <h5>Support</h5>
            <ul>               
                <li>Help</li>
                <li>Site map</li>
                <li>Returns</li>
            </ul>
        </div>
        <div class="Business">
            <h5>Business Cooperation</h5>
            <ul>               
                <li>Join us</li>
                <li>Group purchase</li>
            </ul>
        </div>

    </footer>

</body>
</html>