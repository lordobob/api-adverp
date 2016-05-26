<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Forma extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXFORMAS', 'P20', 'P21', 'P22', 'P13', 'P23', 'P14', 'P24', 'P15', 'P16', 'P17', 'P18', 'P19', 'CODTIPO', 'CODUSUALT', 'CODUSUCRIA', 'FINANQTDPARC', 'VALORADICPARTOT', 'DATAALT', 'DATACRIA', 'DESCRICAO', 'FINANTAC', 'VALORADIC', 'INDNOPRECO', 'FINANINDICE', 'INDECEIMULT', 'DIAFIXO', 'INIPROXIMOMES', 'VALORADICPCT', 'DECIMA', 'DECSEGUNDA', 'DECPRIMEIRA', 'SEXTA', 'SETIMA', 'SEGUNDA', 'TERCEIRA', 'OITAVA', 'NONA', 'PRIMEIRA', 'QUANT', 'QUINTA', 'QUARTA', 'MAXDESC', 'USAFEIRA', 'PRECOMIN', 'P1PCT', 'P2PCT', 'P3PCT', 'P4PCT', 'P5PCT', 'P6PCT', 'P7PCT', 'P8PCT', 'P9PCT', 'P10PCT', 'P20PCT', 'P11PCT', 'P21PCT', 'P12PCT', 'P22PCT', 'P13PCT', 'P23PCT', 'P14PCT', 'P24PCT', 'P15PCT', 'P16PCT', 'P17PCT', 'P18PCT', 'P19PCT', 'INDPAG'];

	protected $table = 'FORMAS';

	protected $primaryKey = 'CODFORMA';

}