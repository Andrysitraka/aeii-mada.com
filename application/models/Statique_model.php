<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statique_model  extends CI_Model{
    public function introduction(){
        $content = 'L’INSTITUT D’ENSEIGNEMENT SUPERIEUR D’ANTSIRABE– VAKINANKARATRA, IES-AV, est comme son nom l’indique un institut universitaire, étant le 8eme établissement au sein de l’Université d’Antananarivo Madagas- car. L’IES-AV est une université à vocation professionnalisant. La premièreentrée académique était en Novembre 2013 car l’Institut a été ouvert depuis l’Année Universitaire 2013-2014, et comporte actuellement 4 promotions. Son o- bjectif étant d’aider les jeunes étudiants malgaches à améliorer leur avenir dans le but d’avoir une situation meilleure dans le monde professionnel.L’IES-AV opère dans divers domaines d’activités afin de répondre aux besoins socio-écono- miques du pays. Pou r se faire, les offres de formation ont pris en compte les réalités socio-économiques de la ré- gion de Vakinankaratra';
        return $content;
    }

}