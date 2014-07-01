<?php 
if(isset($_POST)){
	
	if(isset($_POST['need_loan']) && isset($_POST['amount_req']) && isset($_POST['industry']) && isset($_POST['experience']) && isset($_POST['in_gross']) && isset($_POST['apply_monthly']) && isset($_POST['purpose']) && isset($_POST['apply_company']) && isset($_POST['apply_name']) && isset($_POST['phone']) && isset($_POST['email'])){
		require_once('lib/pdo.class.php');
		$db = new PDO_wrapper("mmww.webair.com","14183_loancentro","14183_jellanlc","qu1t0s");
		$insert = $db->insert("user",$_POST);
		$name = splitName($_POST['apply_name']);
		$mc = insertToMC($name['fname'],$name['lname'],$_POST['phone'],$_POST['email']);
		if($insert && $mc){
			echo 'success';
		}else{
			echo 'error';
		}
		
	}else{
		echo 'error';
	}
	
}else{
	echo 'error';
}

function insertToMC($fname,$lname,$phone,$email){
	require_once('lib/MailChimp.php');
	
	$MailChimp = new MailChimp('28a1a3d9e3b7de88f53119eadad99daf-us8');
	$result = $MailChimp->call('lists/subscribe', array(
					'id'                => 'a7392189b3',
					'email'             => array('email'=>$email),
					'merge_vars'        => array('FNAME'=>$fname, 'LNAME'=>$lname, 'PHONE' =>$phone),
					'double_optin'      => false,
					'update_existing'   => true,
					'replace_interests' => false,
					'send_welcome'      => true,
				));
	//print_r($result);
	return $result;
}

function splitName($name){
	$n = explode(" ",$name);
	
	return array("fname"=>$n[0],"lname"=>$n[1]);
}
?>