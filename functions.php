<?php 
	require_once "config.php";


function nettoyage($data){
	return htmlspecialchars(strip_tags(trim($data)));
}
	
function isUserFree($username,$email){
	try{
		$sql = "SELECT * FROM users WHERE username=:username OR email=:email";
		$req = getBDD()->prepare($sql);
		$params = array(
			'username' 	=> $username,
			'email'		=> $email
		);
		$req->execute($params);

        return !($req->rowCount() > 0);

    } catch (PDOException $e) {
        exit($e->getMessage());
    }
}

function createUser($email, $username, $password)
{
	 try{
	 		$sql = "INSERT INTO users(id,email, username, password) VALUES (NULL,:email,:username,:password)";
            $req = getBDD()->prepare($sql);
            $req->bindParam("email", $email, PDO::PARAM_STR);
            $req->bindParam("username", $username, PDO::PARAM_STR);
            $enc_password = hash('sha256', $password);
            $req->bindParam("password", $enc_password, PDO::PARAM_STR);
            $req->execute();
            return getBDD()->lastInsertId();

        } catch (PDOException $e) {
            exit($e->getMessage());
        }
}

function userLogin($username,$password)
{
	try{
		$hash_password= hash('sha256', $password); //Password encryption 
		$req = getBDD()->prepare("SELECT id FROM users WHERE username=:username AND password=:hash_password"); 
		$req->bindParam("username", $username,PDO::PARAM_STR);
		$req->bindParam("hash_password", $hash_password,PDO::PARAM_STR);
		$req->execute();
		$count=$req->rowCount();
		if($count)
		{
			$data=$req->fetch(PDO::FETCH_OBJ);
			$_SESSION['id']=$data->id; // Storing user session value
			return true;
		}else{
			return false;
		} 
	}catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}';
	}

}




?>