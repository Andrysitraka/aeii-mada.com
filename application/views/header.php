<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $titre;?></title>
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/images/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/css/styles.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/css/animate.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/css/bootstrap.css" />
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js "></script>
    <script src="<?php echo base_url();?>assets/js/jquery.min.js "></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js "></script>
    <script src="<?php echo base_url();?>assets/js/wow.min.js "></script>
    <script src="<?php echo base_url();?>assets/js/send.js "></script>
    <script>
    new WOW().init();
    var baseUrl = "<?php print base_url(); ?>";

    </script>
</head>

<body>
    <header class="entete">
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="<?php echo base_url();?>assets/images/logo.png" width="75" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                <div class="collapse navbar-collapse" id="navbarsExample07">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo site_url();?>">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url();?>/Qui_sommes_nous">Qui sommes-nous</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo site_url();?>/Objectifs">Objectifs</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link " data-toggle="modal" data-target="#myModal" href="#">Pédagogiques</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo site_url();?>/Divers_activites">Divers Activités</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Media</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="#">Photos</a>
                            <a class="dropdown-item" href="#">Video</a>
                           
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo site_url();?>/Contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo site_url();?>/Articles">Articles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-toggle="modal" data-target="#myModalespacemembre" href="#">Espace Membre</a>
                        </li>
                    </ul>
                    <form class="form-inline mt-2 mt-md-0">
                        <a class="text-muted" href="#" id="formserch">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
                        </a>
                        <div id="panel" style="display:none;z-index:1000">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </div>

                    </form>
                </div>
            </div>
        </nav>
    </header>
      <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content px-4 py-2">
      <div class="modal-header">
        <h4 class="modal-title">connexion</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
        <form action="" method="POST" class="py-2">
            <div class="form-group">
                <label for="email">Adresse email</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="form-group">
                <label for="pwd">Mot de passe:</label>
                <input type="password" class="form-control" id="pwd" required>
            </div>
            <div class="form-group">
                <label for="country">Classe</label>
                <select class="custom-select d-block w-100" id="country" required>
                  <option value="">Classe...</option>
                  <option>1ère année</option>
                  <option>2èm année</option>
                  <option>3èm année</option>
                  <option>4èm année</option>
                  <option>5èm année</option> 
                </select>
            </div>
            <div class="form-check py-2">
                <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Se souvenir de moi
                </label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary float-left" name="connexion
                ">Connexion</button>
                <button type="reset" class="btn btn-default float-right">reset</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

  <!-- The Modal espace memebre -->
  <div class="modal fade" id="myModalespacemembre">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content px-4 py-2">
      <div class="modal-header">
        <h4 class="modal-title text-center">Espace Membre</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
        <form action="" method="POST" class="py-2">
            <div class="form-group">
                <label for="email">Adresse email</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="form-group">
                <label for="pwd">Mot de passe:</label>
                <input type="password" class="form-control" id="pwd" required>
            </div>
            <div class="form-check py-2">
                <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Se souvenir de moi
                </label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary float-left" name="connexion
                ">Connexion</button>
                
            </div>
        </form>
        <a href="" style="position: relative;top: -42px;"><button type="submit" class="btn btn-success float-right" name="inscription
                ">S'inscrire</button></a>
      </div>
    </div>
  </div>
</div>

