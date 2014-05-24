<?php
$username = $_POST['username'];
$pwd = $_POST['pwd'];
$cookie_file = "cookie.txt";
$cookie_file2="cookie2.txt";
$login_url = 'https://webprod.admin.uillinois.edu/ssa/servlet/SelfServiceLogin?appName=edu.uillinois.aits.SelfServiceLogin&dad=BANPROD1';
$post_fields = 'inputEnterpriseId='.$username.'&password='.$pwd.'&queryString=null&BTN_LOGIN=Login';

$ch = curl_init($login_url);
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
curl_setopt($ch,CURLOPT_COOKIEJAR,$cookie_file);
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.131 Safari/537.36)');
curl_setopt($ch,CURLOPT_REFERER, 'https://apps.uillinois.edu/selfservice/index.html');
$arr = curl_exec($ch);
if ($arr == NULL) { 
           echo "First Step Error:<br>";
           echo curl_errno($ch) . " - " . curl_error($ch) . "<br>";
}

curl_close($ch);
$login_url = 'https://eas.admin.uillinois.edu/eas/servlet/login.do';

$ch = curl_init($login_url);
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$post_fields);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
 
curl_setopt($ch,CURLOPT_HTTPHEADER,array('Host: eas.admin.uillinois.edu','Origin: https://eas.admin.uillinois.edu','Content-Type: application/x-www-form-urlencoded'));
curl_setopt($ch,CURLOPT_COOKIEJAR,$cookie_file2);
curl_setopt($ch,CURLOPT_COOKIEFILE,$cookie_file);
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.131 Safari/537.36)');
curl_setopt($ch,CURLOPT_REFERER, 'https://eas.admin.uillinois.edu/eas/servlet/EasLogin?redirect=https://webprod.admin.uillinois.edu/ssa/servlet/SelfServiceLogin?appName=edu.uillinois.aits.SelfServiceLogin&dad=BANPROD1');
$arr2 = curl_exec($ch);
if ($arr2 == NULL) { 
           echo "Second Step Error:<br>";
           echo curl_errno($ch) . " - " . curl_error($ch) . "<br>";
}

curl_close($ch);

file_put_contents("output.txt",$arr2);
if (strpos($arr2,'WELCOME') !== false) {
    $result = array();
    $result[0] = 1;
    echo json_encode($result);
}
elseif(strpos($arr2,'The Enterprise ID or Password that you provided was incorrect. Please note: Enterprise ID is case sensitive.') !== false)
{
	$result = array();
    $result[0] = 0;
    echo json_encode($result);

}
else echo 0;
?>
