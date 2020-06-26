<?php


class Etudiant implements IApp
{
    protected $matricule;
    protected $nom;
    protected $prenom;
    protected $email;
    protected $telephone;
    protected $dateNaissance;


    public function __construct($row=null)
    {
        if($row != null){
            $this->hydrate($row);
        }
    }

    /**
     * function hydrate
     * @param $row array les données à initialiser
     */
    public function hydrate($row)
    {
        $this->matricule = $row['matricule'];
        $this->nom = $row['nom'];
        $this->prenom = $row['prenom'];
        $this->email = $row['email'];
        $this->telephone = $row['telephone'];
        $this->dateNaissance = $row['dateNaissance'];

    }


    /**** GETTERS ****/
    /**
     * @return mixed
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }




    /**** SETTERS ****/
    /**
     * @param mixed $matricule
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $dateNaissance
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }



}