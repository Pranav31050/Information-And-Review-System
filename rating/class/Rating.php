<?php
class Rating{
	private $host  = 'localhost';
    private $user  = 'root';
    private $password   = "";
    private $database  = "infosys";    
	private $itemUsersTable = 'registration';
	private $itemTable = 'tbl_ins';	
    private $itemRatingTable = 'ins_rating';
	private $dbConnect = false;
    public function __construct(){
        if(!$this->dbConnect){ 
            $conn = new mysqli($this->host, $this->user, $this->password, $this->database);
            if($conn->connect_error){
                die("Error failed to connect to MySQL: " . $conn->connect_error);
            }else{
                $this->dbConnect = $conn;
            }
        }
    }
	private function getData($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$data= array();
		while ($row = mysqli_fetch_array($result)) {
			$data[]=$row;            
		}
		return $data;
	}
	private function getNumRows($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$numRows = mysqli_num_rows($result);
		return $numRows;
	}	
	public function userLogin($email, $password){
		$sqlQuery = "
			SELECT * 
			FROM ".$this->itemUsersTable." 
			WHERE email='".$email."' AND password='".$password."'";
        return  $this->getData($sqlQuery);
	}		
	public function getItemList(){
		$sqlQuery = "
			SELECT * FROM ".$this->itemTable;
		return  $this->getData($sqlQuery);	
	}
	public function getItem($insid){
		$sqlQuery = "
			SELECT * FROM ".$this->itemTable."
			WHERE id='".$insid."'";
		return  $this->getData($sqlQuery);	
	}
	public function getItemRating($insid){
		$sqlQuery = "
			SELECT r.ratingid, r.insid, r.userid, u.email, r.ratingnumber, r.comments, r.created, r.modified
			FROM ".$this->itemRatingTable." as r
			LEFT JOIN ".$this->itemUsersTable." as u ON (r.userid = u.userid)
			WHERE r.insid = '".$insid."'";
		return  $this->getData($sqlQuery);		
	}
	public function getRatingAverage($insid){
		$itemRating = $this->getItemRating($insid);
		$ratingnumber = 0;
		$count = 0;		
		foreach($itemRating as $itemRatingDetails){
			$ratingnumber+= $itemRatingDetails['ratingnumber'];
			$count += 1;			
		}
		$average = 0;
		if($ratingnumber && $count) {
			$average = $ratingnumber/$count;
		}
		return $average;	
	}
	public function saveRating($POST, $userid){		
		$insertRating = "INSERT INTO ".$this->itemRatingTable." (insid, userid, ratingnumber, comments, created, modified) VALUES ('".$POST['insid']."', '".$userid."', '".$POST['rating']."', '".$POST["comment"]."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')";
		mysqli_query($this->dbConnect, $insertRating);	
	}
}
?>