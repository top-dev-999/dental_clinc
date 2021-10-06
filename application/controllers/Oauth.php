<?php


//if (!defined('BASEPATH'))
  //  exit('No direct script access allowed');

/*     
 *     @author : Creativeitem
 *     30th July, 2014
 *     Creative Item
 *     www.creativeitem.com
 *     http://codecanyon.net/user/creativeitem
 */

class Oauth extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('crud_model');
        $this->load->model('email_model');
        $this->load->database();
        $this->load->library('session');
        /* cache control */
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 2010 05:00:00 GMT");
    }
    
    //Default function, redirects to logged in user area
    public function index()
    {
        
        $this->getAccessToken();
    }
    
    //Ajax login function 
    function do_login()
    {
        
        //Recieving post input of email, password from ajax request
        $email    = $_POST["email"];
        $password = $_POST["password"];
        
        //Validating login
        $login_status = $this->validate_login($email, $password);
        if ($login_status == 'success') {
            redirect(site_url('login'), 'refresh');
        } else {
            $this->session->set_flashdata('error_message', get_phrase('login_failed'));
            redirect(site_url('login'), 'refresh');
        }
    }
 
    
    function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_notification', 'logged_out');
        redirect(site_url('login'), 'refresh');
    }

/*

$authorize_url = "https://auth-dev.aasandha.mv/oauth/authorize";
$token_url = "https://auth-dev.aasandha.mv/oauth/access_token";

//	callback URL specified when the application was defined--must match what API says
$callback_uri = "https://www.getpostman.com/oauth2/callback";

$test_api_url = "https://api-dev.aasandha.mv";

//	client (application) credentials - located at apim.byu.edu
$client_id = "28195b959c3e5728b51c824e831955b302056511";
$client_secret = "1be9d76397f3bbe4a31140703f5f901bf6a95c09";


if ($_POST["access_token"]) {
	//	what to do if there's an access token
	$resource = getResource($_POST["access_token"]);
	echo $resource;
} elseif ($_POST["hidden_token"]) {
	$resource = getResource($_POST["hidden_token"]);
	echo $resource;
} else {
	//	what to do if there's no access token
	getAccessToken();
}
*/


//	step A - single call with client ID and callback on the URL
function getAccessToken() {
    
    $authorize_url = "https://auth-dev.aasandha.mv/oauth/authorize";
$token_url = "https://auth-dev.aasandha.mv/oauth/access_token";

//	callback URL specified when the application was defined--must match what API says
$callback_uri = "https://www.getpostman.com/oauth2/callback";

$test_api_url = "https://api-dev.aasandha.mv";

//	client (application) credentials - located at apim.byu.edu
$client_id = "28195b959c3e5728b51c824e831955b302056511";
$client_secret = "1be9d76397f3bbe4a31140703f5f901bf6a95c09";


	//global $authorize_url, $client_id, $callback_uri, $token_url;

	$authorization_redirect_url = $authorize_url . "?response_type=token&client_id=" . $client_id . "&redirect_uri=" . $callback_uri . "&scope=openid";

	//	create form
	echo "Go <a href='$authorization_redirect_url'>here</a>, copy the code, and paste it into the box below.<br /><form id='get_token' action=" . $_SERVER["PHP_SELF"] . " method = 'post'><input type='text' name='access_token' /><br /><input type='submit'><input type='hidden' name='hidden_token' id='hidden_token'/></form>";

	//	use JavaScript to check for access_token in URL
	//		redirects if it doesn't exist
	//		submits form if it does
	echo "<script type='text/javascript'>if (window.location.hash.length > 0) {var accessToken = window.location.hash; accessToken = accessToken.slice(accessToken.indexOf('access_token') + 13); accessToken = accessToken.slice(0, accessToken.indexOf('&')); document.getElementById('hidden_token').value = accessToken; document.getElementById('get_token').submit();} else {window.location.replace('$authorization_redirect_url');}</script>";
}

//	we can now use the access_token as much as we want to access protected resources
function getResource($access_token) {
	global $test_api_url;

	$header = array("Authorization: Bearer {$access_token}");

	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_URL => $test_api_url,
		CURLOPT_HTTPHEADER => $header,
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_RETURNTRANSFER => true
	));
	$response = curl_exec($curl);
	curl_close($curl);

	return json_decode($response, true);
}




}
