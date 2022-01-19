<?php

final class Constantes
{

    const REPERTOIRE_VUES        = '/view/';

    const REPERTOIRE_MODELE      = '/model/';

    const REPERTOIRE_NOYAU       = '/noyau/';

    const REPERTOIRE_CONTROLEURS = '/controller/';
   
    const REPERTOIRE_ROUTEUR = '/routeur/';


    public static function repertoireRacine() {
        return realpath(__DIR__ . '/../');
    }

    public static function repertoireNoyau() {
        return self::repertoireRacine() . self::REPERTOIRE_NOYAU;
    }

    public static function repertoireVues() {
        return self::repertoireRacine() . self::REPERTOIRE_VUES;
    }

    public static function repertoireModele() {
        return self::repertoireRacine() . self::REPERTOIRE_MODELE;
    }

    public static function repertoireControleurs() {
        return self::repertoireRacine() . self::REPERTOIRE_CONTROLEURS;
    }
    public static function repertoireRouteur(){
  return self::repertoireRacine().self::REPERTOIRE_ROUTEUR;
}

}