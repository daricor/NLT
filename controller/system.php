<?php
class System {

    /**
     * Les vues déclarées dans l'application
     * @var array 
     */
    private static $views = array('loaderMail', 'connexion', 'groupes', 'fail', 'meteo', 'stats', 'redaction');

    /**
     * Inclusion de la vue demandée/attendue
     * @param string $page
     * @return null
     */
    public static function getView($page) {
        if (in_array($page, self::$views)) {
            require_once './views/' . $page . '.php';
        } else {
            require_once './views/connexion.php';
        }
        return null;
    }
    
    
}