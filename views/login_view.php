<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
     <style>
         
         .loginBox{
             position: absolute;
             margin-left: -185px !important;
            left:50%;
             top:50%;
             margin-top: -167px;
         }
    </style>
   <title>Simple Login with CodeIgniter</title>
   <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet"> </head>
 <body>
    <div class="span4 loginBox">
      <div class="well">
        <legend>Sign in to WebApp</legend>
            <?php echo form_open('verifylogin'); ?>
            <div style="color:red;">
                <?php echo validation_errors(); ?>
            </div>      
            <input class="span3" style="width:95%;" placeholder="Username" type="text" name="username">
            <input class="span3" style="width:95%;" placeholder="Password" type="password" name="password"> 
            <button class="btn-info btn btn-block" type="submit">Login</button>      
        </form>    
      </div>
    </div>
 </body>
</html>



