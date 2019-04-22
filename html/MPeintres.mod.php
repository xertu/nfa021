<?php
/**
 * Class de type Modèle gérant la table PEINTRES
 * 
 * @author Christian Bonhomme
 * @version 1.0
 * @package EXO-MOOC
 */
class MPeintres
{
  /**
   * Connexion à la Base de Données
   * @var object $conn
   */
  private $conn;

  /**
   * Clef primaire de la table PEINTRES
   * @var int $id
   */
  private $id_peintre;
  
  /**
   * Tableau de gestion de données (insert ou update)
   * @var array $value
   */
  private $value;
  
  /**
   * Constructeur de la class MPeintres
   * Instancie le membre privé $conn
   * @access public
   *        
   * @return none
   */
  public function __construct($_id_peintre = null)
  {
    // Connexion à la Base de Données
    $this->conn = new PDO(DATABASE, LOGIN, PASSWORD);

    // Instanciation du membre $id_peintre
    $this->id_peintre = $_id_peintre;
    
    return;
 
  } // __construct()
  
  /**
   * Destructeur de la class MPeintres
   * @access public
   *        
   * @return none
   */
  public function __destruct() {}

  /**
   * Instancie le membre $value
   * @access public
   * @param array tableau des données
   *
   * @return none
   */
  public function SetValue($_value)
  {
    $this->value = $_value;
    
    return;
  
  } // SetValue($_value)
  
  /**
   * Récupère plusieurs tuples de la table PEINTRES
   * @access public
   *
   * @return array tuples de la table PEINTRES
   */
  public function SelectAll()
  {
    $query = 'select ID_PEINTRE,
                     NOM,
                     PRENOM,
                     PHOTO
	          from PEINTRES';
  
    $result = $this->conn->prepare($query);
  
    $result->execute();
  
    return $result->fetchAll();
   
  } // SelectAll()
  
  /**
   * Récupère un tuple de la table PEINTRES
   * @access public
   *
   * @return array tuple de la table PEINTRES
   */
  public function Select()
  {
    $query = "select ID_PEINTRE,
                     NOM,
                     PRENOM,
                     PHOTO
              from PEINTRES
              where ID_PEINTRE = $this->id_peintre";
  
    $result = $this->conn->prepare($query);
  
    $result->execute();
  
    return $result->fetch();
  
  } // Select()
  
  /**
   * Déclenche une modification de la table PEINTRES
   * @access public
   *
   * @return array tuple de la table PEINTRES
   */
  public function Modify($_type)
  {
    switch ($_type)
    {
      case 'insert' : return $this->Insert();
      case 'update' : return $this->Update();
      case 'delete' : return $this->Delete();
    }
    
    return;
       
  } // Modify($_type)
  
  /**
   * Insère les données d'un tuple dans la table PEINTRES
   * @access private
   *
   * @return array tuple de la table PEINTRES
   */
  private function Insert()
  {
    $NOM = $this->value['NOM'];
    $PRENOM = $this->value['PRENOM'];
    $PHOTO = $this->value['PHOTO'];
  
    $query = "insert into PEINTRES (NOM, PRENOM, PHOTO)
              values('$NOM', '$PRENOM', '$PHOTO')";
  
    $result = $this->conn->prepare($query);
  
    $result->execute();
  
    $this->id_peintre = $this->conn->lastInsertId();
  
    $this->value['ID_PEINTRE'] = $this->id_peintre;
  
    return $this->value;
  
  } // Insert()

  /**
   * Modifie les données d'un tuple dans la table PEINTRES
   * @access private
   *
   * @return array tuple de la table PEINTRES
   */
  private function Update()
  {
    $NOM = $this->value['NOM'];
    $PRENOM = $this->value['PRENOM'];
    $PHOTO = $this->value['PHOTO'];
  
    $query = "update PEINTRES
              set NOM = '$NOM',
                  PRENOM = '$PRENOM',
                  PHOTO = '$PHOTO'
              where ID_PEINTRE = $this->id_peintre";
  
    $result = $this->conn->prepare($query);
  
    $result->execute();
  
    $this->value['ID_PEINTRE'] = $this->id_peintre;
  
    return $this->value;
  
  } // Update()

  /**
   * Supprime un tuple de la table PEINTRES
   * @access private
   *
   * @return array tuple de la table PEINTRES
   */
  private function Delete()
  {
    $query = "delete from PEINTRES
              where ID_PEINTRE = $this->id_peintre";
  
    $result = $this->conn->prepare($query);
  
    $result->execute();

    $this->value['ID_PEINTRE'] = $this->id_peintre;
    
    return $this->value;
       
  } // Delete()
  
} // MPeintres
?>