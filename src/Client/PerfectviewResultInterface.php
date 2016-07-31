<?php

namespace Bixie\PerfectviewApi\Client;


interface PerfectviewResultInterface {

	/**
	 * @return bool
	 */
	public function isSuccess ();

	/**
	 * @return string|bool
	 */
	public function getError ();

	/**
	 * @return string
	 */
	public function getErrorInformation ();

	/**
	 * @return mixed
	 */
	public function getResult ();

	/**
	 * @param mixed $Result
	 * @return $this
	 */
	public function setResult ($Result);

}