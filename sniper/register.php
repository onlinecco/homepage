<?php

$username = $_POST['username'];
$pwd = $_POST['pwd'];
$username = 'jcao7';
$pwd = 'MEIxueYUAN0915';
$cookie_file = "cookie.txt";
$cookie_file2="cookie2.txt";
$login_url = 'https://webprod.admin.uillinois.edu/ssa/servlet/SelfServiceLogin?appName=edu.uillinois.aits.SelfServiceLogin&dad=BANPROD1';
$post_fields = 'inputEnterpriseId='.$username.'&password='.$pwd.'&queryString=null&BTN_LOGIN=Login';

$ch = curl_init($login_url);
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
//curl_setopt($ch,CURLOPT_POST,1);
//curl_setopt($ch,CURLOPT_POSTFIELDS,$post_fields);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
curl_setopt($ch,CURLOPT_COOKIEJAR,$cookie_file);
//curl_setopt($ch,CURLOPT_COOKIEFILE,$cookie_file);
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
//curl_setopt($ch,CURLOPT_HTTPHEADER,array('Host: eas.admin.uillinois.edu','Origin: https://eas.admin.uillinois.edu','Content-Length: 80','Content-Type: application/x-www-form-urlencoded'));
 
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

$login_url = 'https://ui2web1.apps.uillinois.edu/BANPROD1/twbkwbis.P_GenMenu?name=bmenu.P_RegAgreementAdd';

$ch = curl_init($login_url);
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
//curl_setopt($ch,CURLOPT_POST,1);
//curl_setopt($ch,CURLOPT_POSTFIELDS,$post_fields);
//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
//curl_setopt($ch,CURLOPT_HTTPHEADER,array('Host: eas.admin.uillinois.edu','Origin: https://eas.admin.uillinois.edu','Content-Length: 80','Content-Type: application/x-www-form-urlencoded'));
 
//curl_setopt($ch,CURLOPT_HTTPHEADER,array('Host: eas.admin.uillinois.edu','Origin: https://eas.admin.uillinois.edu','Content-Type: application/x-www-form-urlencoded'));
curl_setopt($ch,CURLOPT_COOKIEJAR,$cookie_file);
curl_setopt($ch,CURLOPT_COOKIEFILE,$cookie_file2);
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.131 Safari/537.36)');
curl_setopt($ch,CURLOPT_REFERER, 'https://eas.admin.uillinois.edu/eas/servlet/EasLogin?redirect=https://webprod.admin.uillinois.edu/ssa/servlet/SelfServiceLogin?appName=edu.uillinois.aits.SelfServiceLogin&dad=BANPROD1');
$arr2 = curl_exec($ch);
if ($arr2 == NULL) { 
           echo "Third Step Error:<br>";
           echo curl_errno($ch) . " - " . curl_error($ch) . "<br>";
}

curl_close($ch);

$login_url = 'https://ui2web1.apps.uillinois.edu/BANPROD1/bwskfreg.P_AltPin';

$ch = curl_init($login_url);
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
//curl_setopt($ch,CURLOPT_POST,1);
//curl_setopt($ch,CURLOPT_POSTFIELDS,$post_fields);
//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
//curl_setopt($ch,CURLOPT_HTTPHEADER,array('Host: eas.admin.uillinois.edu','Origin: https://eas.admin.uillinois.edu','Content-Length: 80','Content-Type: application/x-www-form-urlencoded'));
 
//curl_setopt($ch,CURLOPT_HTTPHEADER,array('Host: eas.admin.uillinois.edu','Origin: https://eas.admin.uillinois.edu','Content-Type: application/x-www-form-urlencoded'));
curl_setopt($ch,CURLOPT_COOKIEJAR,$cookie_file2);
curl_setopt($ch,CURLOPT_COOKIEFILE,$cookie_file);
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.131 Safari/537.36)');
curl_setopt($ch,CURLOPT_REFERER, 'https://eas.admin.uillinois.edu/eas/servlet/EasLogin?redirect=https://webprod.admin.uillinois.edu/ssa/servlet/SelfServiceLogin?appName=edu.uillinois.aits.SelfServiceLogin&dad=BANPROD1');
$arr2 = curl_exec($ch);
if ($arr2 == NULL) { 
           echo "Third Step Error:<br>";
           echo curl_errno($ch) . " - " . curl_error($ch) . "<br>";
}

curl_close($ch);

$login_url = 'https://ui2web1.apps.uillinois.edu/BANPROD1/bwskfreg.P_AltPin';
$post_fields= "term_in=120148";
$ch = curl_init($login_url);
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$post_fields);
//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
//curl_setopt($ch,CURLOPT_HTTPHEADER,array('Host: eas.admin.uillinois.edu','Origin: https://eas.admin.uillinois.edu','Content-Length: 80','Content-Type: application/x-www-form-urlencoded'));
 
//curl_setopt($ch,CURLOPT_HTTPHEADER,array('Host: eas.admin.uillinois.edu','Origin: https://eas.admin.uillinois.edu','Content-Type: application/x-www-form-urlencoded'));
curl_setopt($ch,CURLOPT_COOKIEJAR,$cookie_file);
curl_setopt($ch,CURLOPT_COOKIEFILE,$cookie_file2);
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.131 Safari/537.36)');
curl_setopt($ch,CURLOPT_REFERER, 'https://eas.admin.uillinois.edu/eas/servlet/EasLogin?redirect=https://webprod.admin.uillinois.edu/ssa/servlet/SelfServiceLogin?appName=edu.uillinois.aits.SelfServiceLogin&dad=BANPROD1');
$arr2 = curl_exec($ch);
if ($arr2 == NULL) { 
           echo "Third Step Error:<br>";
           echo curl_errno($ch) . " - " . curl_error($ch) . "<br>";
}

curl_close($ch);

$login_url = 'https://ui2web1.apps.uillinois.edu/BANPROD1/bwckcoms.P_Regs';
$post_fields="term_in=120148&RSTS_IN=DUMMY&assoc_term_in=DUMMY&CRN_IN=DUMMY&start_date_in=DUMMY&end_date_in=DUMMY&SUBJ=DUMMY&CRSE=DUMMY&SEC=DUMMY&LEVL=DUMMY&CRED=DUMMY&GMOD=DUMMY&TITLE=DUMMY&MESG=DUMMY&REG_BTN=DUMMY&RSTS_IN=RW&CRN_IN=52694&assoc_term_in=&start_date_in=&end_date_in=&RSTS_IN=RW&CRN_IN=&assoc_term_in=&start_date_in=&end_date_in=&RSTS_IN=RW&CRN_IN=&assoc_term_in=&start_date_in=&end_date_in=&RSTS_IN=RW&CRN_IN=&assoc_term_in=&start_date_in=&end_date_in=&RSTS_IN=RW&CRN_IN=&assoc_term_in=&start_date_in=&end_date_in=&RSTS_IN=RW&CRN_IN=&assoc_term_in=&start_date_in=&end_date_in=&RSTS_IN=RW&CRN_IN=&assoc_term_in=&start_date_in=&end_date_in=&RSTS_IN=RW&CRN_IN=&assoc_term_in=&start_date_in=&end_date_in=&RSTS_IN=RW&CRN_IN=&assoc_term_in=&start_date_in=&end_date_in=&RSTS_IN=RW&CRN_IN=&assoc_term_in=&start_date_in=&end_date_in=&regs_row=0&wait_row=0&add_row=10&REG_BTN=Submit+Changes";
$ch = curl_init($login_url);
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$post_fields);
//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
//curl_setopt($ch,CURLOPT_HTTPHEADER,array('Host: eas.admin.uillinois.edu','Origin: https://eas.admin.uillinois.edu','Content-Length: 80','Content-Type: application/x-www-form-urlencoded'));
 
//curl_setopt($ch,CURLOPT_HTTPHEADER,array('Host: eas.admin.uillinois.edu','Origin: https://eas.admin.uillinois.edu','Content-Type: application/x-www-form-urlencoded'));
curl_setopt($ch,CURLOPT_COOKIEJAR,$cookie_file2);
curl_setopt($ch,CURLOPT_COOKIEFILE,$cookie_file);
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.131 Safari/537.36)');
curl_setopt($ch,CURLOPT_REFERER, 'https://eas.admin.uillinois.edu/eas/servlet/EasLogin?redirect=https://webprod.admin.uillinois.edu/ssa/servlet/SelfServiceLogin?appName=edu.uillinois.aits.SelfServiceLogin&dad=BANPROD1');
$arr2 = curl_exec($ch);
if ($arr2 == NULL) { 
           echo "Third Step Error:<br>";
           echo curl_errno($ch) . " - " . curl_error($ch) . "<br>";
}

curl_close($ch);


file_put_contents("output.php",$arr2);
?>
