<?php


abstract class Manager implements IDao
{
    private $pdo = null; //Fermer la connexion

    protected $classname; //Le nom de la classe
    protected $tablename;

    /**
     * Fonction qui permet d'ouvrir la connection
     */
    private function getConnection()
    {
        if ($this->pdo == null) {
            try {
                $this->pdo = new PDO("mysql:host=localhost;dbname=appgeschambreetudiant", "root", "");
                $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                die("Erreur au niveau de la base de donnée. Veuillez contacter SYMBOLE");
            }
        }
    }

    /**
     * Fonction qui permet de fermer la connexion
     */
    private function closeConnection()
    {
        if ($this->pdo != null) {
            $this->pdo = null;
        }
    }


    /**
     * @param $sql string la requête avec les marqueurs (en ?)
     * @param $array array aux tableaux des variables des marqueurs
     * @return array le nombre d'enregistrement sous format OBJ
     */
    public function executeSelect($sql, $array=null)
    {
        $this->getConnection();
        $result = [];
        $stmt = $this->pdo->prepare($sql);
        if($array!=null){
            $stmt->execute($array);
        }else{
            $stmt->execute();
        }
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $data = [];
        foreach ($result as $rowDB) {
            $data [] = new $this->classname($rowDB);
        }

        $this->closeConnection();

        return $data;
    }

    /**
     * @param $sql string la requête avec les marqueurs (en ?)
     * @param $array array aux tableaux des variables des marqueurs
     * @return mixed le nombre de ligne
     */
    public function executeUpdate($sql, $array=null)
    {

        $this->getConnection();
        $stmt = $this->pdo->prepare($sql);
        if($array!=null){
            $nbreLignes = $stmt->execute($array);
        }else{
            $nbreLignes = $stmt->execute();
        }
        $this->closeConnection();

        return $nbreLignes;
    }


    public function findAll()
    {
        $sql = "SELECT * FROM $this->tablename";
        $data = $this->executeSelect($sql);
        return count($data) == 1 ? $data[0] : $data;
        
    }

    /**
     * @param $id int l'id de l'enregistrement
     * @param mixed
     */
    public function findById($id)
    {
        $sql = "SELECT * FROM $this->tablename WHERE id = ?";
        $data = $this->executeUpdate($sql);
        return $data;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        $sql = "DELETE FROM $this->tablename WHERE id=?";
        $data = $this->executeUpdate($sql);
        return $data;
    }
}