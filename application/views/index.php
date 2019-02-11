<?php $title ="Andry";?>
<section class="container-fluid">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner wow fadeInUp">
                <div class="carousel-item active">
                    <img src="<?php echo base_url();?>assets/images/banner1.jpg" alt="Los Angeles">
                    <div class="carousel-caption">
                        <h3>PRENEZ EN MAIN VOTRE AVENIR</h3>
                        <p>la clé de votre réussite c’est votre volonté et votre courage</p>
                        <button class="calltoaction1">Nos mentions</button>
                        <button class="calltoaction2">Actualités</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url();?>assets/images/banner2.jpg" alt="Chicago">
                    <div class="carousel-caption ">
                    <h3>PRENEZ EN MAIN VOTRE AVENIR</h3>
                        <p>la clé de votre réussite c’est votre volonté et votre courage</p>
                        <button class="calltoaction1">Nos mentions</button>
                        <button class="calltoaction2">Actualités</button>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="<?php echo base_url();?>assets/images/banner4.jpg " alt="New York ">
                    <div class="carousel-caption ">
                    <h3>PRENEZ EN MAIN VOTRE AVENIR</h3>
                        <p>la clé de votre réussite c’est votre volonté et votre courage</p>
                        <button class="calltoaction1">Nos mentions</button>
                        <button class="calltoaction2">Actualités</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container presentation">
        <div class="row logo wow fadeInUp">
            <img src="<?php echo base_url();?>assets/images/logo.png" class="logo-univ">
        </div>
        <div class="row titre">
            <div class="col-md-12 wow fadeInUp">
                <h3 class="text-center">PRESENTATIONS DE L’IES-AV </h3>
                <h4 class="text-center">L’INSTITUT D’ENSEIGNEMENT SUPERIEUR D’ANTSIRABE– VAKINANKARATRA, IES-AV </h4>
                <hr>
            </div>

        </div>
    </section>
    <section class="container-fluid introduction">
        <div class="container">
            <div class="row">
                <div class="col-md-6 bloc-text wow fadeInLeft" data-wow-duration="1s">
                    <h4 class="">INTRODUCTION</h4>
                        <p>
                           <?php echo  $get_intro ;?>
                        </p>
                </div>
                <div class="col-md-6 bloc-image wow fadeInRight" data-wow-duration="1s">

                </div>

            </div>
    </section>
    <section class="container formation">
        <h3 class="text-center wow fadeInUp" data-wow-duration="1s">NOS FORMATIONS</h3>
        <hr>
        <div class="row py-3">
            <div class="col-md-6 ressource wow fadeInLeft">
                <h4 class="py-2 px-3 ressource">RESSOURCES HUMAINES</h4>
                <p class="text-muted">
                    L’administration est dirigée par le Directeur de l’IES-AV, actuellement assuré par le Docteur Rajaonarison Eddie Franck Chaque mention est gérée par le Responsable de mention, de même pour chaque parcours qui est lui-même géré par le chef de parcours.
                    Le nombre d’enseignants permanents est de 13 actuellement. Vu l’effectif de ces derniers, la majorité des cours est encore assurée par des enseignants vacataires et permanents provenant des autres établi6 ssements au sein de l’Université
                    d’Antananarivo. L’effectif des personnels administratifs est de 15.
                </p>
                <h4 class="py-2 px-3 systeme">LE SYSTEM LMD</h4>
                <p class="text-muted">
                    L’IES-AV s’est préparée à appliquer le système LMD depuis sa création. Les programmes d’enseignement sont alors orientés vers l’esprit du système LMD (Licence Master Doctorat). Les offres de formation au sein de la mention Autom- atisme et Informatique
                    sont habilitées.
                </p>
                <h4 class="py-2 px-3 formation">LA DURE DE FORMATION</h4>
                <p class="text-muted">
                    Après trois années d’études, un stage de 6 à 8 semaines doit être effectué et sanctionné par une soutenance publique en vue de l’obtention du diplôme de licence Professionnel.
                    <br> Après les trois années d’études, il y a deux ans de spécialisation qui sont sanctionnés par un mémoire pour l’obtention du diplôme de master Professionnel ou de master recherche.
                </p>

            </div>
            <div class="col-md-6 info wow fadeInRight" data-wow-duration="1s">
                <h4 class="py-2  px-3">LES MENTIONS EXISTANTS</h4>
                <div class="row mention m-3 pt-2">
                    <p><span>+</span>AUTOMATISME ET INFORMATIQUE</p>
                </div>
                <div class="row mention m-3 pt-2">
                    <p><span>+</span>INGENIERIE MINIERE</p>
                </div>
                <div class="row mention  m-3 pt-2">
                    <p><span>+</span>ENVIRONEMENT</p>
                </div>
                <div class="row mention  m-3 pt-2">
                    <p><span>+</span>GENIE INDUSTRIEL</p>
                </div>
                <div class="row mention m-3 pt-2">
                    <p><span>+</span>MATHEMATIQUES</p>
                </div>
                <div class="row mention m-3 pt-2">
                    <p><span>+</span>SCIENCE DE LA COMMUNICATION</p>
                </div>
                <div class="row mention m-3 pt-2">
                    <p><span>+</span>GENIE CIVIL</p>
                </div>
                <div class="row mention m-3 pt-2">
                    <p><span>+</span>TELECOMMUNICATION</p>
                </div>

            </div>
        </div>
    </section>
    <section class="container-fluid gallery">
        <div class="row">
            <div class="col-md-4 mentions wow fadeInRight" data-wow-duration="1s">
                <h4 class="wow fadeIn" data-wow-delay="1s">MENTIONS</h4>
                <h5><a href="">Lire plus</a></h5>
            </div>
            <div class="col-md-4 actualites wow fadeInUp" data-wow-duration="1s">
                <h4 class="wow fadeIn" data-wow-delay="1s">ACTIVITES</h4>
                <h5><a href="">Lire plus</a></h5>

            </div>
            <div class="col-md-4 activites wow fadeInLeft" data-wow-duration="1s">
                <h4 class="wow fadeIn" data-wow-delay="1s"> ACTUALITES</h4>
                <h5><a href="">Lire plus</a></h5>
            </div>
        </div>
    </section>