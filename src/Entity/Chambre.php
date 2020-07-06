<?php

namespace App\Entity;

use App\Repository\ChambreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChambreRepository::class)
 */
class Chambre
{

    /**
     *@ORM\Id()
     * @ORM\Column(type="string", length=50)
     */
    private $numeroChambre;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $typeChambre;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $numeroBatiment;


    public function getNumeroChambre(): ?string
    {
        return $this->numeroChambre;
    }

    public function setNumeroChambre(string $numeroChambre): self
    {
        $this->numeroChambre = $numeroChambre;

        return $this;
    }

    public function createNumber($number){
        if(preg_match("#[0-9]{4}#",$number)){
            return  "_".$number;
        }else{
            $numberNew = (string)$number;
            $taille = strlen($numberNew);
            if ($taille<4){
                $restant = 4-$taille;
                for ($i=0; $i < $restant; $i++) { 
                    $number = "0".$number;
                }
                return "_".$number;
            }
        }
    }

    public function generateNumber($numBat,$num){
        $num = $this->createNumber($num);
        return $numBat."".$num;
    }

    public function getTypeChambre(): ?string
    {
        return $this->typeChambre;
    }

    public function setTypeChambre(string $typeChambre): self
    {
        $this->typeChambre = $typeChambre;

        return $this;
    }

    public function getNumeroBatiment(): ?string
    {
        return $this->numeroBatiment;
    }

    public function setNumeroBatiment(string $numeroBatiment): self
    {
        $this->numeroBatiment = $numeroBatiment;

        return $this;
    }
}
