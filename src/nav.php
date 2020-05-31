<nav class="navbar navbar-expand-md navbar-dark navigation col-lg-12">
      <a class="navbar-brand" href="#">Sakhir Fall</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav mr-auto">
          <?php 
                  if ($nav_en_cours =="presentation")
                {
                echo '<li class="nav-item active">';
                }
                else
                {
                echo '<li class="nav-item">';
                }
            ?>
            <a class="nav-link" href="listequestions.php">Liste Question </a>
          </li>
          <?php 
                  if ($nav_en_cours =="listejoueur")
                {
                echo '<li class="nav-item active">';
                }
                else
                {
                echo '<li class="nav-item">';
                }
            ?>
            <a class="nav-link" href="listejoueurs.php">Liste Joueur</a>
          </li>
          <?php 
                  if ($nav_en_cours =="creercompte")
                {
                echo '<li class="nav-item active">';
                }
                else
                {
                echo '<li class="nav-item">';
                }
            ?>
            <a class="nav-link" href="creercompte.php">Creer Compte</a>
          </li>
        <?php 
                  if ($nav_en_cours =="creerquestion")
                {
                echo '<li class="nav-item active">';
                }
                else
                {
                echo '<li class="nav-item">';
                }
            ?>
            <a class="nav-link" href="creerquestion.php">Creer question</a>
          </li>
        </ul>
      </div>
    </nav>