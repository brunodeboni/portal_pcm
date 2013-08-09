<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Empresa extends ORM {

	

	// Retorna somente números
	function decode_telefone($telefone){
		$telefone = trim($telefone);
		if($telefone=="") return "";
		$nums = "0123456789";

		$numsarr = str_split($nums);
		$telsarr = str_split($telefone);

		$novo_telefone = "";

		foreach($telsarr as $tel){
			$ex = false;
			foreach($numsarr as $num){
				if($tel == $num){
					$ex = true;
					break;
				}
			}
				
			if($ex) $novo_telefone .= $tel;
		}

		return $novo_telefone;
	}

	/**
	 * Rules for the user model. Because the password is _always_ a hash
	 * when it's set,you need to run an additional not_empty rule in your controller
	 * to make sure you didn't hash an empty string. The password rules
	 * should be enforced outside the model or with a model helper method.
	 *
	 * @return array Rules
	 */
	public function rules()
	{
		/*	return array(
			'username' => array(
					array('not_empty'),
					array('max_length', array(':value', 32)),
					array(array($this, 'unique'), array('username', ':value')),
			),
				'password' => array(
						array('not_empty'),
				),
				'email' => array(
						array('not_empty'),
						array('email'),
						array(array($this, 'unique'), array('email', ':value')),
				),
		);	*/
		return array(
				'empresa' => array(
						array('not_empty'),
						array(array($this, 'unique'), array('empresa', ':value')),
				),
				'cnpj' => array(
						array('not_empty'),
						array(array($this, 'unique'), array('cnpj', ':value')),
				),
				'cidade' => array(
						array('not_empty'),
				),
				'uf' => array(
						array('not_empty'),
				),
				'email' => array(
						array('not_empty'),
						array('email'),
						array(array($this, 'unique'), array('email', ':value')),
				),
				'telefone' => array(
						array('not_empty'),
						array(array($this, 'unique'), array('telefone', ':value')),
				),
				'celular' => array(
						array('not_empty'),
						array(array($this, 'unique'), array('celular', ':value')),
				),
		);
	}

	/**
	 * Filters to run when data is set in this model. The password filter
	 * automatically hashes the password when it's set in the model.
	 *
	 * @return array Filters
	 */
	public function filters()
	{
		return array(
				'telefone' => array(
						array(array($this, 'decode_telefone'))
				),
				'celular' => array(
						array(array($this, 'decode_telefone'))
				),
		);
	}



}

?>