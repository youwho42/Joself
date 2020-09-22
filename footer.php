            
        
       
        <footer class="footer">
          
            <p><a href="contact.php">Contact</a></p>
            <p><a href="about.php">About</a></p>
            <div class="socialLink">
                <div class="social">
                    <a href="https://www.facebook.com/joseph.barnes.1023" target="_blank"><img src="images/flogo-white-72.png"></a>
                </div>
                <div class="social">
                    <a href="" target="_blank"><img src="images/instalogo_white.png"></a>
                </div>
            </div>
            <p>
                <?php echo "<p class='copy'>&copy; " . date("Y") . " JebSenrab</p>"; ?>
            </p>
        </footer>
</div>
</div>
        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>
<script language="JavaScript">
// Code for validating the form
// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
// for details
var frmvalidator  = new Validator("myemailform");
frmvalidator.addValidation("name","req","Please provide your name");
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>
    </body>

</html>