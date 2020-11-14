<?php
     include_once 'headfoot/header.php';
?>
     <div class="welcome__name">
          <?php
               if(isset($_SESSION["useruid"])){
                    echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
               }
          ?>
     </div>

     <section class="hero">

          <div class="hero__image" style="background-image: url('images/electrologo.png')"></div>
          
          <div class="hero__text container">
               <h1>
                    Electrical Laboratory
               </h1>
               <p>
                    Computer Engineering
               </p>
               <a href="labs.php" class="button__hero hero__cta">Start Now</a>
          </div>
     </section>

     <section class="labs">

          <div class="lab__content container container--pall"> 
               <h2>Laboratorys</h2>

               <div class="lab__grid">
                    <a href="laboratory/digital/class.php" class="lab__item">
                         <div class="lab__image" style="background-image: url('images/Digital_Lab.jpg')"></div>
                         <div class="lab__text">
                              <div class="lab__title">
                                   Digital
                              </div>
                              <div class="lab__description">
                                   Learn about Electronics in Computer Hardware
                              </div>
                         </div>
                    </a>

                    <a href="laboratory/electronics/class.php" class="lab__item">
                         <div class="lab__image" style="background-image: url('images/Electronics_Lab.jpg')"></div>
                         <div class="lab__text">
                              <div class="lab__title">
                                   Electronics
                              </div>
                              <div class="lab__description">
                                   Learn about Electronics in Computer Hardware
                              </div>
                         </div>
                    </a>

                    <a href="laboratory/networking/class.php" class="lab__item">
                         <div class="lab__image" style="background-image: url('images/Networking_Lab.jpg')"></div>
                         <div class="lab__text">
                              <div class="lab__title">
                                   Networking
                              </div>
                              <div class="lab__description">
                                   Learn about Networking using Cisco Packet Tracer
                              </div>
                         </div>
                    </a>
               </div>
          </div>
     
     </section>
     


<?php
     include_once 'headfoot/footer.php';
?>