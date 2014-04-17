        <?php include("inc/header.php");?>

        <?php include("inc/nav.php");?>

        <!--site content start--> 
        <?php
                $page = $_GET['page'];  /* gets the variable $page */
                $pages = array('home','stories','feature_artist','1020yearson','timeline','protest_music','perspectives','about');

                if (!empty($page)) {
                    if (in_array($page,$pages)){
                        $page.='.php';
                        include($page);

                    }else{
                      echo 'Page not found .Return to <a href="index.php"> index</a>';
                    }

                }   /* if $page has a value, include it */
                else {
                  include('home.php');
                }   /* otherwise, include the default page */
        ?>                

      <?php include("inc/footer.php");?>

	</body>
	</html>
