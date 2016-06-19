<?php

namespace App\Validators;

use Prettus\Validator\LaravelValidator;

class ProdutoValidator extends LaravelValidator
{

	protected $rules = [
		ValidatorInterface::RULE_CREATE => [
			'CODGRU' => 'exists:firebird.GRUPOS,CODGRU',
			'CODSUBGRU' => 'exists:firebird.SUBGRUPOS,CODSUBGRU',
			'CODMAR' => 'exists:firebird.MARCAS,CODMAR',
			'CODCFOPPROD' => 'exists:firebird.NFCFOPPROD,CODCFOPPROD',
			'CODNCM' => 'exists:firebird.NCMS,CODNCM',
			'CODTIPOPRODUTO' => 'exists:firebird.TIPOPRODUTO,CODTIPOPRODUTO',
			'CODUN' => 'exists:firebird.UNIDADES,CODUN',
			'CODUNCONVERSAO' => 'exists:firebird.UNIDADES,CODUN',
			'CODPRODORIGEM' => 'exists:firebird.PRODORIGENS,CODPRODORIGEM'
		],
		ValidatorInterface::RULE_UPDATE => [
			'CODGRU' => 'exists:firebird.GRUPOS,CODGRU',
			'CODSUBGRU' => 'exists:firebird.SUBGRUPOS,CODSUBGRU',
			'CODMAR' => 'exists:firebird.MARCAS,CODMAR',
			'CODCFOPPROD' => 'exists:firebird.NFCFOPPROD,CODCFOPPROD',
			'CODNCM' => 'exists:firebird.NCMS,CODNCM',
			'CODTIPOPRODUTO' => 'exists:firebird.TIPOPRODUTO,CODTIPOPRODUTO',
			'CODUN' => 'exists:firebird.UNIDADES,CODUN',
			'CODUNCONVERSAO' => 'exists:firebird.UNIDADES,CODUN',
			'CODPRODORIGEM' => 'exists:firebird.PRODORIGENS,CODPRODORIGEM',
			'DESCRICAO' => 'required'
		]
	];

}