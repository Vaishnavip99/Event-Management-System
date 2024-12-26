<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
            span.error{
                color: red;
            }            
        </style>  
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?>
         
<div class = "content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
                   
    <form action="includes/form2email.php" method="POST"><!--form-->
                        <div class = "form-group">
                        <br><br><br><br><br><br>
                         <center><h1><strong>Booking Successful</strong></h1><br>
                         <strong> thanks for visiting our website!!!!</strong> 
                        </center>
                        </div>
    </form>
                </div>
            </div>
            <form>
       <center><button type="submit" class="btn btn-success center-block"><a href="index.php">Close</a></button></center>
</form>
</div>
<?php require 'utils/footer.php'; ?>
<style>
body{
        background-color: #fff;
        align-items: center;
    }
btn{
     
    height:5.5rem;
    width:25rem;
    background:#fff;
    outline:none;
    border:.2rem solid black;
    font-size: 2rem;
    margin:1rem 0;
    cursor: pointer;
    overflow: hidden;
    z-index: 0;
    position: relative;
}    
</style>
<br><br>

</body>
</html>