<?
namespace Main;
use \PDO;
	class DB {

		public $dbh;

		public function __construct() {
			try {
		    	$this->dbh = new PDO('mysql:host=localhost;dbname=test_blog', 'root', '');
			} catch (PDOException $e) {
			    print "Error!: " . $e->getMessage() . "<br/>";
			    die();
			}
		}

	}

?>