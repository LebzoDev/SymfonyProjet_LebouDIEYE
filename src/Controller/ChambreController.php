<?php

namespace App\Controller;
//namespace App\Repository;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController ;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request; // Nous avons besoin d'accéder à la requête pour obtenir le numéro de page
use Knp\Component\Pager\PaginatorInterface; // Nous appelons le bundle KNP Paginator

use App\Entity\Chambre as Chambre;


class ChambreController extends AbstractController
{
    /**
     * @Route("/chambre", name="chambre")
     */
    public function index(Request $request,PaginatorInterface $paginator)
    {
        ob_start();
        session_start();
        $session = ob_get_clean();
       
       //$chambres = $this->getDoctrine()->getRepository(Chambre::class)->findAll();
       //$resultats = $this->getDoctrine()->getRepository(Chambre::class)->findBy([] ,null,5, $_SESSION['position']);
        ob_start();
            $donnees = $this->getDoctrine()->getRepository(Chambre::class)->findBy( [] ,null);
            $resultats = $paginator->paginate( $donnees,$request->query->getInt('page', 1), 6);
        $content = ob_get_clean();
    
        return $this->render('chambre/ListeChambre.html.twig', [
            'session' => $session,
            'resultats' => $resultats,
            'content' => $content,
          
        ]);
    }
    /**
     * @Route("/CreateChambre", name="createChambre")
     */
    public function createChambre()
    {
        ob_start();
        if (isset($_POST['creerChambre'])) {          
            //Je vais esssayer de recuperer le nombre de chambre ds la base 
            $chambres = $this->getDoctrine()->getRepository(Chambre::class)->findAll();
            $resultat = count($chambres);
            //Appeler la fonction getManager afin de pouvoir inserer les données
            $em = $this->getDoctrine()->getManager();
            //Instancier une nouvelle chambre
            $chambre = new Chambre();
            //Hydrater mon objet tout en generant le numero de la Chambre
            $numero = $chambre->generateNumber($_POST['numeroBatiment'],$resultat);
            $chambre->setNumeroChambre($numero);
            $chambre->setTypeChambre($_POST['type']);
            $chambre->setNumeroBatiment($_POST['numeroBatiment']);
            $em->persist($chambre);
            //Execution de la requete (Insertion des données dans la base)
            $em->flush();
        }
         $content = ob_get_clean();

        return $this->render('chambre/AddChambre.html.twig', [
            'content' => $content,
            
        ]);
    }

     /**
     * @Route("/AddEtudiant", name="AddEtudiant")
     */
    public function AddEtudiant()
    {
        return $this->render('chambre/AddEtudiant.html.twig');
    }
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('etudiant/ListeEtudiant.html.twig');
    }

    /**
     * @Route("/allocation", name="allocation")
     */
    public function allocation()
    {
        return $this->render('chambre/allocation.html.twig');
    }
}
