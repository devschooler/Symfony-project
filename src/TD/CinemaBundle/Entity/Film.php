<?php

namespace TD\CinemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Film
 *
 * @ORM\Table(name="film")
 * @ORM\Entity(repositoryClass="TD\CinemaBundle\Repository\FilmRepository")
 */
class Film
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="Synopsis", type="text")
     */
    private $synopsis;

    /**
     * @var string
     *
     * @ORM\Column(name="date_de_sortie", type="date")
     */
    private $dateDeSortie;



    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Genre", inversedBy="Films")
     */
    private $genre;

      /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Personne", inversedBy="Films")
     */
    private $personne;



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Film
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set synopsis
     *
     * @param string $synopsis
     *
     * @return Film
     */
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Get synopsis
     *
     * @return string
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Set dateDeSortie
     *
     * @param string $dateDeSortie
     *
     * @return Film
     */
    public function setDateDeSortie($dateDeSortie)
    {
        $this->dateDeSortie = $dateDeSortie;

        return $this;
    }

    /**
     * Get dateDeSortie
     *
     * @return string
     */
    public function getDateDeSortie()
    {
        return $this->dateDeSortie;
    }



    /**
     * Set genre
     *
     * @param string $genre
     *
     * @return Film
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

/**
     * Set genre
     *
     * @param string $genre
     *
     * @return Film
     */
    public function setPersonne($personne)
    {
        $this->genre = $personne;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string
     */
    public function getPersonne()
    {
        return $this->personne;
    }
}
