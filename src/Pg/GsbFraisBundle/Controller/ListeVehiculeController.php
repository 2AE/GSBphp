<?php
namespace Pg\GsbFraisBundle\Controller;
require_once("include/fct.inc.php");
//require_once ("include/class.pdogsb.inc.php");
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

//use PdoGsb;
class ListeFraisController extends Controller
{
    public function indexAction()
    {
        $session= $this->container->get('request')->getSession();
        $idVisiteur =  $session->get('id');
       // $pdo = PdoGsb::getPdoGsb();
        $pdo = $this->get('pg_gsb_frais.pdo');
        $lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
        if($this->get('request')->getMethod() == 'GET'){
                // Afin de sélectionner par défaut le dernier mois dans la zone de liste
                // on demande toutes les clés, et on prend la première,
                // les mois étant triés décroissants
            $lesCles = array_keys( $lesMois );
            $moisASelectionner = $lesCles[0];
            return $this->render('PgGsbFraisBundle:ListeVehicule:listedetoutlesvehicules.html.twig',
                array('lesmois'=>$lesMois,'lemois'=>$moisASelectionner));
        }
       
        
    }
    
    
}






?>
