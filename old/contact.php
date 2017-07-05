<?php 
error_reporting(E_ALL ^ E_NOTICE); // hide all basic notices from PHP

//If the form is submitted
if(isset($_POST['submitted'])) {
  
  // require a name from user
  if(trim($_POST['name']) === '') {
    $nameError =  'Forgot your name!'; 
    $hasError = true;
  } else {
    $name = trim($_POST['name']);
  }

  // require a last name from user
  if(trim($_POST['last-name']) === '') {
    $lastnameError =  'Forgot your Last Name!'; 
    $hasError = true;
  } else {
    $lastname = trim($_POST['last-name']);
  }

  // require a subject from user
  if(trim($_POST['subject']) === '') {
    $subjectError =  'Forgot your Subject!'; 
    $hasError = true;
  } else {
    $subject = trim($_POST['subject']);
  }
  
  // need valid email
  if(trim($_POST['email']) === '')  {
    $emailError = 'Forgot to enter in your e-mail address.';
    $hasError = true;
  } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
    $emailError = 'You entered an invalid email address.';
    $hasError = true;
  } else {
    $email = trim($_POST['email']);
  }
    
  // we need at least some content
  if(trim($_POST['message']) === '') {
    $commentError = 'You forgot to enter a message!';
    $hasError = true;
  } else {
    if(function_exists('stripslashes')) {
      $message = stripslashes(trim($_POST['message']));
    } else {
      $message = trim($_POST['message']);
    }
  }
    
  // upon no failure errors let's email now!
  if(!isset($hasError)) {
    
    $emailTo = 'contactl@lapatedor.com';
    $subject = 'Submitted message from '.$name;
    $sendCopy = trim($_POST['sendCopy']);
    $body = "Subject: $subject \n\nName: $name \n\nLast Name: $lastname \n\nEmail: $email \n\nMessage: $message";
    $headers = 'From: ' .' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

    mail($emailTo, $subject, $body, $headers);
        
        // set our boolean completion value to TRUE
    $emailSent = true;
  }
}
?>

<?php include 'inc/head.php' ?>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        
        <!-- Animation Elements -->
        <img class="aitem a1" src="img/parallax/8.png" alt="Featured Image">
        <img class="aitem a2" src="img/parallax/splat.png" alt="Featured Image">
        <img class="aitem a3" src="img/parallax/7.png" alt="Featured Image">
        <img class="aitem a4" src="img/parallax/1.png" alt="Featured Image">
        <img class="aitem a5" src="img/parallax/3.png" alt="Featured Image">
        <img class="aitem a7" src="img/parallax/11.png" alt="Featured Image">


        <!-- Header -->
<?php include 'inc/header.php' ?>




        <!-- Navigation -->
<?php include 'inc/nav.php' ?>
    







  

        <!-- Contact Section -->
        <div class="container aboutWrapper reservationsWrapper">
          <div class="row-fluid client_info_holder animationStart section_featured_texts">
            <div class="span12 reservations-title">
              <h2>Contact</h2>
            </div>
          </div>

          <div class="divider divider_contact"></div>

          <div class="row-fluid reservations-features client_info_holder animationStart section_featured_texts">

           <?php if(isset($emailSent) && $emailSent == true) { ?>
                <p class="info">Votre email a été envoyé | Your email was sent.</p>
            <?php } else { ?>

            <?php if(isset($hasError) || isset($captchaError) ) { ?>
                <p class="alert">Erreur en soumettant le formulaire | Error submitting the form</p>
            <?php } ?>

           <form action="contact.php" id="contact-us" method="post" class="client_info_holder animationStart section_featured_texts">
             <div class="row-fluid inputWrapper">
               <div class="span6">
                 <p>
                   <label for="name">Prénom | First Name</label>
                   <input type="text" name="name" id="name" value="<?php if(isset($_POST['name'])) echo $_POST['name'];?>" class="txt requiredField">
                   <?php if($nameError != '') { ?>
                    <br /><span class="error"><?php echo $nameError;?></span> 
                   <?php } ?>
                 </p>

                 <p>
                   <label for="email">Courriel | Email</label>
                   <input type="email" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="txt requiredField email">
                   <?php if($emailError != '') { ?>
                    <br /><span class="error"><?php echo $emailError;?></span>
                   <?php } ?>
                 </p>
               </div>
               <div class="span6">
                 <p>
                   <label for="last-name">Nom | Last Name</label>
                   <input type="text" name="last-name" id="last-name" value="<?php if(isset($_POST['last-name'])) echo $_POST['last-name'];?>" class="txt requiredField">
                   <?php if($lastnameError != '') { ?>
                    <br /><span class="error"><?php echo $lastnameError;?></span>
                   <?php } ?>
                 </p>

                 <p>
                   <label for="subject">Sujet | Subject</label>
                   <input type="text" name="subject" id="subject" value="<?php if(isset($_POST['subject'])) echo $_POST['subject'];?>" class="txt requiredField">
                   <?php if($subjectError != '') { ?>
                    <br /><span class="error"><?php echo $subjectError;?></span>
                   <?php } ?>
                 </p>

               </div>

               <div class="row-fluid">
                 <div class="span12 messageContainer">
                  <label for="message">Message</label>
                   <textarea name="message" id="Message" cols="30" rows="10"><?php if(isset($_POST['message'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['message']); } else { echo $_POST['message']; } } ?></textarea>
                   <?php if($commentError != '') { ?>
                    <br /><span class="error"><?php echo $commentError;?></span> 
                   <?php } ?>
                 </div>
               </div>
               <button type="submit">Envoyer | Send</button>
               <input type="hidden" name="submitted" id="submitted" value="true" />
             </div>
           </form>

           <?php } ?>

          </div>
        </div>









        


        <!-- Gallery & Testimonials -->
      <?php include 'inc/gt.php' ?>  








<?php include 'inc/footer.php' ?>
        <script type="text/javascript">
          <!--//--><![CDATA[//><!--
          $(document).ready(function() {
            $('form#contact-us').submit(function() {
              $('form#contact-us .error').remove();
              var hasError = false;
              $('.requiredField').each(function() {
                if($.trim($(this).val()) == '') {
                  var labelText = $(this).prev('label').text();
                  $(this).parent().append('<span class="error">Your forgot to enter your '+labelText+'.</span>');
                  $(this).addClass('inputError');
                  hasError = true;
                } else if($(this).hasClass('email')) {
                  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                  if(!emailReg.test($.trim($(this).val()))) {
                    var labelText = $(this).prev('label').text();
                    $(this).parent().append('<span class="error">Sorry! You\'ve entered an invalid '+labelText+'.</span>');
                    $(this).addClass('inputError');
                    hasError = true;
                  }
                }
              });
              if(!hasError) {
                var formInput = $(this).serialize();
                $.post($(this).attr('action'),formInput, function(data){
                  $('form#contact-us').slideUp("fast", function() {          
                    $(this).before('<p class="tick"><strong>Thanks!</strong> Your email has been delivered!</p>');
                  });
                });
              }
              
              return false; 
            });
          });
          //-->!]]>
        </script>
    </body>
</html>
