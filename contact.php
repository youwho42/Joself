
                <?php include 'header.php';?>
                <div class="lang">
                    <p><a href="">fr</a> - <a href="">en</a></p>
                </div>
                <!-- menu -->
                <?php include 'menu.php';?>


                <div class="mainContent">
                    <div class="actualContent">
                        <img src="images/Selfies/bluesky.jpg" alt="Hosting" class="image">
                    </div>
                    <div class="actualContent">
                        <form method="post" name="myemailform" action="form-to-email.php" class="contact">
                       
                        
                        <input type="text" name="name" placeholder="prénom et nom">
                        <br>
                        <input type="text" name="email" placeholder="e-mail">
                        <br>
                        <input type="text" name="subject" placeholder="subject">
                        <br>
                       
                        <textarea class="newsletterText" name="message" placeholder="message"></textarea>
                        <br>
                        
                        <input class="sendButton" type="submit" value="Envoyer" >
                            <br><br>

                    </form>
                    </div>
                
                <!-- footer -->
                
                <?php include 'footer.php';?>
                        
                        
                        
                        
                        
                        
                        

