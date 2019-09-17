<?php
class formulaire {
	private $_db;
	private $_nom;
	private $_prenom;
	private $_email;
	private $_password;


	public function __construct($db){
		$this->setDB($db);
	}

	public function add(Formulaire $formulaire){
		$q = $this->_db->prepare('INSERT INTO Formulaire (Nom , Prenom, Email, Password) values (:Nom , :Prenom , :Email, :Pasword) ');
		$q->bindValue(':Nom' , $formulaire->getNom());
		$q->bindValue(':Prenom', $formulaire->getPrenom());
		$q->bindValue(':Email', $formulaire->getEmail());
		$q->bindValue(':Password', $formulaire->getPassword());
		$q->execute();
	}

	public function delete (Formulaire $formulaire)
	{
		// Supprimer la ligne affecte sur la BDD
	}

	public function update (Formulaire $formulaire)
	{
		// Capable de modifier la ligne affecte sur la BDD
	}

	public function get($id)
	{
		//Retourne un objet Pilote en fonction de l'id 
	}
	// Autres méthodes 

	public function getList()
	{
		// Retourne tous les identifiants 
	}

	public function setDb(PDO $db)
	{
		$this->$_db = $db
	}

	$formulaireRempli = new formulaire(['Nom' => ':Nom', 'Prenom'=>':Prenom' , 'Email'=> ':Email' , 'Password'=> ':Password']);
	echo $formulaireRempli;
	try {
		$db = new PDO('mysql::host=127.0.0.1:3306;dbname=photofy','root','');
	}
	catch (PDOException $e){
		echo"Erreur : ".$e->getMessage();
		die();
	}

	$manager = new formulaire($db);
	$manager->add
}


























?>