<?php
class user{
	private $UserID,$UserName,$UserPassword;
	public function getUserID(){
	return $this->UserID;
	}
		public function setUserID($UserID){
		$this->UserID=$UserID;
	}
	public function getUserName(){
	return $this->UserName;
	}
	public function setUserName($UserName){
		$this->UserName=$UserName;
	}
	public function getUserPassword(){
	return $this->UserPassword;
	}
		public function setUserPassword($UserPassword){
		$this->UserPassword=$UserPassword;
	}
	public function InsertUser(){
		include "conn.php";
		$req=$bdd->prepare("INSERT INTO users(UserName,UserPassword) VALUES (:UserName,:UserPassword)");
		$req->execute(array(
		'UserName'=>$this->getUserName(),
		'UserPassword'=>$this->getUserPassword(),
		));
	}
	public function Userlogin(){
		include "conn.php";
		$req=$bdd->prepare("SELECT * FROM users WHERE UserPassword=:UserPassword");
		$req=execute(array(
		'UserPassword'=>$this->getUserPassword()
		));
		if($req->rowCount()==0){
			header("Location: ../index.php?error=1");
		}
		else {
			while($data=$req->fetch()){
				$this->setUserID($data['UserID']);
				$this->setUserName($data['UserName']);
				$this->setUserPassword($data['UserPassword']);
				header("Location: Home.php");
			}	
		}
	}
}
	class chat{
		private $ChatId,$ChatUserId,$ChatText;
		public function getChatId(){
			return $this->ChatId;
		}
		public function setChatId($ChatId){
			$this->ChatId=$ChatId;
		}
			public function getChatUserId(){
			return $this->ChatUserId;
		}
		public function setChatUserId($ChatUserId){
			$this->ChatUserId=$ChatUserId;
		}
			public function getChatText(){
			return $this->ChatText;
		}
		public function setChatText($ChatText){
			$this->ChatText=$ChatText;
		}
		public function InsertChatMessage(){
		include "conn.php";
		$req=$bdd->prepare("INSERT INTO users(ChatUserId,ChatText) VALUES (:ChatUserId,:ChatText)");
		$req->execute(array(
		'ChatUserId'=>$this->getChatUserId(),
		'ChatText'=>$this->getChatText(),
		));
	}
}
?>