<?php
     include_once 'headfoot/header.php';
?>

     <section class="feedbacks">
          <div class="feedback__content container container--pall"> 
               <h2>Feedback</h2>
               <form action="include/feedback.inc.php" method="post">
                    <label for="fname">First name :</label>
                    <input type="text" id="f__name" name="f__name"  required><br><br>
                    <label for="email">E-Mail:</label>
                    <input type="text" id="f__email" name="f__email"  required><br><br>
                    <label for="text__feedback">Feedback:</label>
                    <textarea type="text" id="text__feedback" name="text__feedback"  required></textarea>
                    <input type="submit" value="Submit">
                    
               </form>
          </div>
     </section>
     
<?php
     include_once 'headfoot/footer.php';
?>