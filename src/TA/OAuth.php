<?php
namespace TA;

use Guzzle\Http\Client;
use Guzzle\Http\Exception\ClientErrorResponseException;

class OAuth {

	const SUCCESS = 1;
	const FAILED = 0;

	private $client_id;
	private $client_secret;
	private $access_token;
	private $refresh_token;
	private $redirect_uri;
	private $scope = 'user';
	private $client;
	
	
	public $host = 'http://api.localhost/oauth';
	
	/**
	 * @ignore
	 */
	private function accessTokenURL()  { return $this->host.'/token'; }
	/**
	 * @ignore
	 */
	private function authorizeURL()    { return $this->host.'/auth'; }
	
	public function __construct($client_id, $client_secret, $redirect_uri, $access_token = NULL, $refresh_token = NULL) {
		$this->client_id = $client_id;
		$this->client_secret = $client_secret;
		$this->redirect_uri = $redirect_uri;
		$this->access_token = $access_token;
		$this->refresh_token = $refresh_token;
		$this->client = new Client();
	}
	
	public function getAuthorizeURL( $response_type = 'code', $state = NULL, $display = NULL ) {
		$params = array();
		$params['client_id'] = $this->client_id;
		$params['redirect_uri'] = $this->redirect_uri;
		$params['response_type'] = $response_type;
		$params['scope'] = $this->scope;
		$params['state'] = $state;
		$params['display'] = $display;
		return $this->authorizeURL() . "?" . http_build_query($params);
	}
	/**
	 * 对应API：{@link http://api.localhost/oauth/token OAuth2/access_token}
	 * @param string $type 请求的类型,可以为:code, password, token
	 * @param array $keys 其他参数：
	 *  - 当$type为code时： array('code'=>..., 'redirect_uri'=>...)
	 *  
	 * @return array
	 * */
	public function getAccessToken($type = 'code', $keys) {
		$params = array();
		$params['client_id'] = $this->client_id;
		$params['redirect_uri'] = $this->redirect_uri;
		$params['client_secret'] = $this->client_secret;
		if ('code' == $type) {
			$params['grant_type'] = 'authorization_code';
			$params['code'] = $keys['code'];
		} else {
			throw new OAuthException('wrong auth type');
		}
		$request = $this->client->post($this->accessTokenURL(), null, $params);
		$response = $request->send();
		$data = $response->json();
		return $data;
	}
	
	// public function isValid() {
	// 	$params['access_token'] = $this->access_token;
	// 	return $this->get($this->host.'/isvalid');
	// }
	
	public function get($url, $params = array()) {
		try {
			
			$params['access_token'] = $this->access_token;
			$request = $this->client->get($url . "?" . http_build_query($params));
			$response = $request->send();
			
			$data = $response->json();
			
		} catch (ClientErrorResponseException $e) {
			$data = array('code'=>$e->getCode(), 'msg' => $e->getMessage());
		}


		return $data;
	}
	/**
	 * @return the $client_id
	 */
	public function getClient_id() {
		return $this->client_id;
	}

	/**
	 * @return the $client_secret
	 */
	public function getClient_secret() {
		return $this->client_secret;
	}

	/**
	 * @return the $access_token
	 */
	public function getAccess_token() {
		return $this->access_token;
	}

	/**
	 * @return the $refresh_token
	 */
	public function getRefresh_token() {
		return $this->refresh_token;
	}

	/**
	 * @return the $redirect_uri
	 */
	public function getRedirect_uri() {
		return $this->redirect_uri;
	}

	/**
	 * @return the $scope
	 */
	public function getScope() {
		return $this->scope;
	}

	/**
	 * @return the $client
	 */
	public function getClient() {
		return $this->client;
	}

	/**
	 * @param field_type $client_id
	 */
	public function setClient_id($client_id) {
		$this->client_id = $client_id;
	}

	/**
	 * @param field_type $client_secret
	 */
	public function setClient_secret($client_secret) {
		$this->client_secret = $client_secret;
	}

	/**
	 * @param field_type $access_token
	 */
	public function setAccess_token($access_token) {
		$this->access_token = $access_token;
	}

	/**
	 * @param field_type $refresh_token
	 */
	public function setRefresh_token($refresh_token) {
		$this->refresh_token = $refresh_token;
	}

	/**
	 * @param field_type $redirect_uri
	 */
	public function setRedirect_uri($redirect_uri) {
		$this->redirect_uri = $redirect_uri;
	}

	/**
	 * @param string $scope
	 */
	public function setScope($scope) {
		$this->scope = $scope;
	}

	/**
	 * @param \Guzzle\Http\Client $client
	 */
	public function setClient($client) {
		$this->client = $client;
	}

	
	
}