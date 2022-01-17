<!DOCTYPE HTML>
    <html lang="en-us">
        <head>
            <meta charset="UTF-8">
            <title>Web Development</title>
            <?php
            include "header.php";
            echo "<hr />"
            ?>
        </head>
        <body>
             <p class="container text text-justify" style="border-left: 3px solid black; height: auto">
                <!-- there is no tag for vertical line but border left can be used to produce a vertical line -->
                <strong>Web development</strong> is the work involved in developing a website for the Internet (World Wide Web) or an intranet (a private network).
                Web development can range from developing a simple single static page of plain text to complex web applications, electronic businesses, and social network services.
                A more comprehensive list of tasks to which Web development commonly refers, may include Web engineering, Web design,
                Web content development, client liaison, client-side/server-side scripting, Web server and network security configuration, and e-commerce development.
                <br /><br/>
                Among Web professionals, "Web development" usually refers to the main non-design aspects of building Web sites: writing markup and coding.
                Web development may use content management systems (CMS) to make content changes easier and available with basic technical skills.
                <br/> <br />
                Web development takes into account many security considerations, such as data entry error checking through forms, filtering output, and encryption.
                Malicious practices such as SQL injection can be executed by users with ill intent yet with only primitive knowledge of Web development as a whole.
                Scripts can be used to exploit Web sites by granting unauthorized access to malicious users that try to collect information such as email addresses, passwords and protected content like credit card numbers. Some of this is dependent on the server environment on which the scripting language, such as ASP, JSP, PHP, Python, Perl or Ruby is running, and therefore is not necessarily down to the Web developer themselves to maintain.
                However, stringent testing of Web applications before public release is encouraged to prevent such exploits from occurring.
                If some contact form is provided on a Web site it should include a captcha field in it which prevents computer programs from automatically filling forms and also mail spamming.
                
                <br /> <br />
                For more, kindly <a href="https://en.wikipedia.org/wiki/Web_development">click here</a>
            </p>
            
            <?php
            include "footer.php";
            ?>
            
            <div style="height:200px">
<footer class="jumbotron bg-success">
                    <p class="text text-center">Copyright &copy; Kingsley Amoke
                    <?php
                    function longdate($timestamp)
                    {
                    return date("Y", $timestamp);}
                echo date("Y");
                    ?>
                    </div>
        </body>
    </html>