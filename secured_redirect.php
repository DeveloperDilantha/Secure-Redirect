<?php

/**************************************

Developed By : Priyankara Dilantha 
Contact Me 	: www.dilantha.org 
Usage    : Securely redirect a visitors.
 
**************************************/

// You can add your own access code to the following array.
$access_keys = array(
    "MY_TOKEN_KEY",
    "YOUR_NEW_KEY",
    "Dilantha1998"    
);

?>

<!DOCTYPE html>
<html>
<head>
<title>Secured Redirect</title>
</head>
<body>
<center>


<?php if( isset($_GET["url"]) && isset($_GET["key"]) && in_array($_GET["key"], $access_keys) ){ ?>
    
    <h1>Preparing a secure redirect!</h1>
    
    <p>To protect the advertised website from the bot traffic, we need you to wait a few seconds until we validate your device. Please click the link below, if you are a real human.</p>
    
    <a id="nav" href="<?php echo $_GET["url"];?>">Visit: <?php echo $_GET["url"];?></a>

    
    <script>
        setTimeout(function() {
            window.location.href = "<?php echo $_GET["url"];?>";
        }, <?php echo rand(2500,4000);?>);
    </script> 
    
<?php }else{ ?>

    <h1>Access Denied!</h1>
    
    <p>Please contact the web admin to grant your access to the targeted website. You must use a valid web browser with javaScripts to visit any web page here.</p>
    
<?php } ?>
</center>
</body>
</html>
