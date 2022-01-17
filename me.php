<!DOCTYPE HTML>
    <html>
        <head>
            <title>Kingsley Amoke</title>
            <?php
            include "header.php";
            ?>
            <hr />
        </head>
        <body>
           
            <img src="me.jpg" id="me" class="float-left"> 
           
           <!-- sizing the image of me in the page -->
           <script>
            let y = document.getElementById("me").height = 160;
           </script>
            <p class="container text text-justify">
                <!-- insert a good picture by the side -->
               <b style="color: purple">Kingsley Amoke</b> is an innovative and industrous young man who obtained his Bachelors degree in Science in Biochemistry from the University of
                Nigeria, Nsukka. He came about "mysterious" HTML when he was given the task to manage a blog <a href="http://myinfoozoic.blogspot.com/">site</a> which was not
                comprehensible to him even as he tried.
            </div>
            <br />
            <div class="container">
                <p class="text text-justify">
                   However, he kept pushing to understand HTML with the challenge of not having a personal computer (PC) to practice the theories learned online.
                   Meanwhile the desire and aspiration triggered him to develope passion for programming, but he was mightly help of God to go through web
                   development program organised by the Muhammed Buhari's led government to understand the <i style="color: red">ordered paths</i> required for
                   web development.
                </p>
            </div>
            
            <p class="container text text-justify">
                He currently writes PHP (Hypertetxt pre-processor). The main  website for Goodies Inc is still under construction through <b><u>Whogohost web
                host manager&nbsp;(WHM)</u></b>. Kindly wait for the full launch and, in anticipation to have you back soon.
                
                <p class="container text text-justify">
                    Kindly <a href="calculator.php">view</a> my calculator. Thanks!! 
                </p>
                
            </p>
            
            
            <?php
            include "footer.php";
            ?>
            <br /> <br /> <br />
            
            <footer class="jumbotron bg-info" style="height: auto">
                <p class="text text-center">
                    Copyright &copy; Kingsley Amoke
                    <?php
                    function longdate($timestamp){
                        return date("Y", $timestamp);
                    }
                    echo date("Y");
                    ?>
                </p>
            </footer>
           
        </body>
    </html>