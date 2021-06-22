<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_Model extends CI_Model {

    public function auth($post) {
        $results = CURL(['url' => API_BASE_URL.'/account/signin', 'method' => 'POST', 'data' => $post]);
        return json_decode($results);
    }
}
