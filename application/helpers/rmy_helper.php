<?php
/**
 * @author Ragil Manggalaning Y. <github: @ragil000>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('CURL')) {
    function CURL(...$args) {
        $_this  = get_instance();
        $num_args = func_num_args();
        $token = !empty($_this->session->userdata('penyihir')) ? $_this->session->userdata('penyihir')['token'] : null;
        if($num_args > 0) {
            if(is_array($args[0])) {
                foreach($args[0] as $key => $value) {
                    if($key == 'url') {
                        $ch = curl_init($value);
                    }else if($key == 'method') {
                        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $value);
                    }else if($key == 'data') {
                        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($value)); 
                    }
                }
            }
        }

		curl_setopt($ch, CURLOPT_FAILONERROR, true);                                                                                                 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
		    'Content-Type: application/json',                                                                      
		    'X-API-KEY: M@nG6a-m@N!s',
            'Authorization: Bearer '.$token
		));
		 
		$results = curl_exec($ch);

        return $results;
    }
}

if(!function_exists('alertRMY')) {
    function alertRMY($message, $status) {
        if($status) {
            $alert  = '<div class="col-12" id="alert">
                    <div class="alert alert-success bg-success" role="alert">
                        <i class="icon-check text-light pr-2"></i><span class="text-light">'.$message.'</span>
                    </div>
                </div>';
        }else {
            $alert  = '<div class="col-12" id="alert">
                        <div class="alert alert-danger bg-red-soft" role="alert">
                            <i class="icon-ban text-light pr-2"></i><span class="text-light">'.$message.'</span>
                        </div>
                    </div>';
        }
        return $alert;
    }
}