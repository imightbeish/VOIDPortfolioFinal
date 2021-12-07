<?php 
  get_header();
  require get_template_directory() . '/inc/section_vars.php';
?>
<h1>Ishaan Shah</h1>
<html>
<body>
</body>
</html>
<html>
  <head>
    <style>
        h2 {text-align: center;}
        div.pic {
          position: relative;
          left: 500px;
          top: 27px;
        }
        div.hero {
          position: relative;
          left: 700px;
          top: -110px;
        }
        div.heroHead {
          position: relative;
          left: 95px;
          top: -163px;
        }
        div.AboutMeHeader {
          position: relative;
          left: 700px;
          top: 10px;
        }
        div.AboutMe {
          position: relative;
          left: 560px;
          top: 10px;
        }
        div.projectHeader {
          position: relative;
          left: 700px;
          top: 10px;
        }
        div.projectPictures {
          position: relative;
          left: 700px;
          top: 10px;
        }
        div.experienceHeader {
          position: relative;
          left: 700px;
          top: -85px;
        }
        div.experiencePictures {
          position: relative;
          left: 700px;
          top: -80px;
        }
        div.projectDescr {
          position: relative;
          left: 635px;
          top: 28px;
        }
        div.projectDescrZomb {
          position: relative;
          left: 870px;
          top: -44px;
        }
        div.projectDescrFlash {
          position: relative;
          left: 400px;
          top: -134px;
        }
        
</head>
</style>
<body>
    <div class = "top">
      <div class="pic">
        <img src="<?php echo get_template_directory_uri(); ?>/images/ish.jpg" width="175px" height="245px" />
      </div>
      <div class="hero">
            I'm currently a sophmore studying computer science at The University of Michigan!<br>
            I'm interested in building websites and other apps.
      </div>
      <div class="heroHead">
        <h2>Hi, I'm Ish. Welcome!</h2>
      </div>
    </div>
    <div class="AboutMeHeader">
      <h3> About Me </h3>
    </div>
    <div class="AboutMe">
        Outisde of coding, I love playing and watching sports. I love watching basketball <br>
        and football and I am often playing soccer, basketball, and volleyball. I also love <br>
        watching movies and TV shows and my favorites include How I Met Your Mother, <br>
        21 Jump Street, and Now You See Me.
    </div>
      <div class = "projectHeader">
        <h3> Projects </h3>
      </div>
      <div class = "projectPictures">
        <div><img src="<?php echo get_template_directory_uri(); ?>/images/flashcard.png" width="175px" height="175px" /></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/images/Piazza.png" width="175px" height="175px" /></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/images/zomb.png" width="175px" height="175px" /></div>
    </div>
    <div class="projectDescr">  
        <p> Piazza Parsing Model - EECS280: <br>
            Built a Piazza parsing program <br>
            that suggests posts based on   <br>
            relavent subject lines and topics. </p>
    </div>
    <div class="projectDescrZomb">  
        <p> Zombie Tracker - EECS281: <br>
            Built a Zombie Game Simulation <br>
            that uses priority queues to <br>
            judge when players should shoot <br> 
            certain zombies. </p>
    </div>
    <div class="projectDescrFlash">  
        <p> FlashCard App - Personal: <br>
            Built an app in Android Studio <br>
            that displays flashcards and <br>
            allows the user to add and adjust <br>
            their set to suit their needs. </p>
    </div>
    <div class = "experienceHeader">
        <h3> Experience </h3>
      </div>
      <div class = "experiencePictures">
        <div><img src="<?php echo get_template_directory_uri(); ?>/images/mathnasium.png" width="175px" height="175px" /></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/images/SDG1704.jfif" width="175px" height="175px" /></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/images/dc.png" width="175px" height="175px" /></div>
    </div>
    <div class ="nav">
        <nav>
          <ul class="list">
            <li><a class="Home" href="heroHead">Name</a></li>
            <li><a class="AbtButton" href="AboutMeHeader">About</a></li>
            <li><a class="ProjectButton" href="projectHeader">Projects</a></li>
            <li><a class="ExperineceButton" href="experienceHeader">Experience</a></li>
          </ul>
        </nav>
    </div>


  </body>
  </html>

  <?php if (get_theme_mod($home_top_img)) { ?>
  <img 
    src="<?php echo get_theme_mod($home_top_img) ?>" 
    alt=""
  >
<?php } ?>

<?php if (get_theme_mod($home_top_desc)) { ?>
  <h4>
    <?php echo get_theme_mod($home_top_desc) ?>
  </h4>
<?php } ?>


<?php get_footer(); ?>

