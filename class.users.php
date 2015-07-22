<?php


class users{

	private $conf;
	var $conn;

	function __construct($conf) {
		$this->conn = new mysqli($conf['sql_host'], $conf['sql_user'], $conf['sql_pass'],$conf['sql_name'])or die("db error");
		$this->conf = $conf;
	}
	
	public function checklogin(){
	//	if($_SESSION['wal_session']) ? return true : return false;



		/*$i = $this->conn->query("SELECT * FROM users WHERE username='derek'");

		if($i === false) {
		print(' Error: ' . $this->conn->error);
		die('Terminated Application');
		} else {
		$arr = $i->fetch_all(MYSQLI_ASSOC);
		return $_GET['q'];
		}*/
		//return ($_SESSION['wallet-pro'] ? TRUE : FALSE); //True or false
	}

	public function login(){
		if(!$_GET['user']) die('error no user');
		if(!$_GET['pass']) die('error no pass');

		$user = $this->sanitize($_GET['user']);
		$pass = md5($this->sanitize($_GET['pass']));

		$i = $this->conn->query("SELECT * FROM users WHERE username='".$user."'");
		if($i === false) die('sql error');

		$chk = $i->fetch_all(MYSQLI_ASSOC);
		//print_r($chk);
		if(($user != $chk[0]['username'])) die('bad user');
		if(($pass != $chk[0]['password'])) die('bad pass');
		$_SESSION['user_session'] = $user;
		

	}


	public function register(){
		if(!$_GET['user']) die('error no user');
		if(!$_GET['pass']) die('error no pass');

		$user = $this->sanitize($_GET['user']);
		$pass = md5($this->sanitize($_GET['pass']));

		$i = $this->conn->query("SELECT * FROM users WHERE username='".$user."'");
		if($i === false) die('sql error');

		$chk = $i->fetch_all(MYSQLI_ASSOC);
		if(is_array($chk[0])) die('taken username'); //Fix bug
		//if(($user == $chk[0]['username'])) die('taken username');
		unset($i);//Clear it
		$date = date("n/j/Y g:i a");
		$ip = $_SERVER['REMOTE_ADDR'];
		$i = $this->conn->query("INSERT INTO users (id,date,ip,username,password) VALUES ('','$date','$ip','$user','$pass')");
		if($i === false) die('sql error'); 
		

		$_SESSION['user_session'] = $user;
	}

	public function logout(){
		session_start();
		session_destroy();
		header("Location: index.php");
	}

	public function sanitize($var){
		return addslashes(strip_tags($var));
	}


}
