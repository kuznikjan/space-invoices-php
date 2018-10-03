<?php
namespace Spaceinvoices;

abstract class ApiResource {
	public static function _POST($url,$body = '{}') {
		$real_url = \Spaceinvoices\Spaceinvoices::$apiBaseUrl.$url;

		$response = \Httpful\Request::post($real_url)
			->sendsJson()
			->body($body)
			->addHeader('Authorization', \Spaceinvoices\Spaceinvoices::getAccessToken())
			->send();
		return $response;
	}
	public static function _GET($url,$params = null) {
		$real_url = \Spaceinvoices\Spaceinvoices::$apiBaseUrl.$url;

		if (!is_null($params)) {
			$query_string = http_build_query($params);
			$real_url = $real_url.'?'.$query_string;
		}

		$response = \Httpful\Request::get($real_url)
			->expectsJson()
			->addHeader('Authorization', \Spaceinvoices\Spaceinvoices::getAccessToken())
			->send();
		return $response;
	}
	public static function _PUT($url,$body = '{}') {
		$real_url = \Spaceinvoices\Spaceinvoices::$apiBaseUrl.$url;

		$response = \Httpful\Request::put($real_url)
			->sendsJson()
			->body($body)
			->addHeader('Authorization', \Spaceinvoices\Spaceinvoices::getAccessToken())
			->send();
		return $response;
	}

	public static function _DELETE($url) {
		$real_url = \Spaceinvoices\Spaceinvoices::$apiBaseUrl.$url;

		$response = \Httpful\Request::delete($real_url)
			->expectsJson()
			->addHeader('Authorization', \Spaceinvoices\Spaceinvoices::getAccessToken())
			->send();
		return $response;
	}

	public static function _PDF($url,$lang) {
		$real_url = \Spaceinvoices\Spaceinvoices::$apiBaseUrl.$url;

		if ($lang) {
			$response = \Httpful\Request::get($real_url)
				->sendsJson()
				->body('{}')
				->addHeader('Authorization', \Spaceinvoices\Spaceinvoices::getAccessToken())
				->addHeader('l', $lang)
				->send();
		} else {
			$response = \Httpful\Request::get($real_url)
				->sendsJson()
				->body('{}')
				->addHeader('Authorization', \Spaceinvoices\Spaceinvoices::getAccessToken())
				->send();
		}
		return $response;
	}
}

?>