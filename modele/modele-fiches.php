<?php
/**
 * Class de type Modèle gérant la table DOCUMENTS
 * 
 * @author Christian Bonhomme
 * @version 1.0
 * @package EXAM-CNAM
 */
class MDocuments
{
  /**
   * Connexion à la Base de Données
   * @var object $conn
   */
  private $conn;

  /**
   * Clef primaire de la table DOCUMENTS
   * @var int identifiant du document
   */
  private $id_doc;
  
  /**
   * Tableau de gestion de données (insert ou update)
   * @var array tableau des données
   */
  private $value;
  
  /**
   * Constructeur de la class MDocuments
   * Instancie le membre privé $conn
   * @access public
   * @param int identifiant du document
   *        
   * @return none
   */
  public function __construct($_id_doc = null)
  {
    // Connexion à la Base de Données
    $this->conn = new PDO(DATABASE, LOGIN, PASSWORD);

    // Instanciation du membre $id_doc
    $this->id_doc = $_id_doc;
    
    return;
 
  } // __construct()
  
  /**
   * Destructeur de la class MDocuments
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
   * Récupère plusieurs tuples de la table DOCUMENTS
   * @access public
   *
   * @return array tuples de la table DOCUMENTS
   */
  public function SelectAll()
  {
  	$query = 'select D.ID_DOC, TITRE, AUTEUR, FICHIER
              from DOCUMENTS D, THEMES_DOCUMENTS TD
  			  where TD.ID_DOC = D.ID_DOC
  			  and TD.ID_THEME = :ID_THEME
   		      order by TITRE';

  	$result = $this->conn->prepare($query);

  	$result->bindValue(':ID_THEME', $this->value['ID_THEME'], PDO::PARAM_INT);
  	 
  	$result->execute() or die ($this->ErrorSQL($result));
  	
    return $result->fetchAll();
   
  } // SelectAll()
  
  /**
   * Récupère un tuple de la table DOCUMENTS
   * @access public
   *
   * @return array tuple de la table DOCUMENTS
   */
  public function Select()
  {
    $query = 'select ID,TITRE,CONTENU
              from fiches_conseils
              where id = :ID';
  
    $result = $this->conn->prepare($query);

    $result->bindValue(':ID_DOC', $this->id_doc, PDO::PARAM_INT);
    
    $result->execute() or die ($this->ErrorSQL($result));
    
    return $result->fetch();
  
  } // Select()