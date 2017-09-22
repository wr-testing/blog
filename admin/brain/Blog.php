<?
namespace Admin;
include('/../../DB.php');
use Main\DB;

class Blog extends DB {

	public function blogIndex() {
		$sth = $this->dbh->prepare('SELECT * from articles');
		$sth->execute();
		$data = $sth->fetchAll();
		return $data;
	}

	public function blogCreate() {
		$sql = "INSERT INTO articles(name,
            filmDescription,
            filmImage,
            filmPrice,
            filmReview) VALUES (
            :filmName, 
            :filmDescription, 
            :filmImage, 
            :filmPrice, 
            :filmReview)";
                                          
$sth = $this->dbh->prepare($sql);
                                              
$stmt->bindParam(':filmName', $_POST['filmName'], PDO::PARAM_STR);       
$stmt->bindParam(':filmDescription', $_POST['filmDescription'], PDO::PARAM_STR); 
$stmt->bindParam(':filmImage', $_POST['filmImage'], PDO::PARAM_STR);
// use PARAM_STR although a number  
$stmt->bindParam(':filmPrice', $_POST['filmPrice'], PDO::PARAM_STR); 
$stmt->bindParam(':filmReview', $_POST['filmReview'], PDO::PARAM_STR);   
                                      
$stmt->execute(); 
		$data = $sth->fetchAll();
		return $data;
	}

	public function blogUpdate() {
		$sth = $this->dbh->prepare('SELECT * from articles');
		$sth->execute();
		$data = $sth->fetchAll();
		return $data;
	}

	public function blogDelete() {
		$sth = $this->dbh->prepare('SELECT * from articles');
		$sth->execute();
		$data = $sth->fetchAll();
		return $data;
	}
	
}
$blogAdmin = new Blog();
