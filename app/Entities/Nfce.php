<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Nfce extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['NUMNFCE', 'CHAVENFCE', 'PROTOCOLONFCE', 'MSGCANCELA', 'CODLOJA', 'CODOS', 'RECIBONFCE', 'INDPAG', 'MODELO', 'SERIE', 'DTEMISSAO', 'INDFINAL', 'CODNFOPERACAO', 'CRT', 'RAZAO', 'UF', 'CPCN', 'RGIE', 'ENDERECO', 'ENDNUM', 'COMPLEMENTO', 'BAIRRO', 'CODCID', 'CIDADE', 'CEP', 'FONE1', 'EMAIL', 'BASECALCICMS', 'VALORICMS', 'BASECALCICMSSUBS', 'VALORICMSSUBS', 'TOTALGERALPRODS', 'VALFRETE', 'VALSEGURO', 'DESCONTOOS', 'VLRICMSDESON', 'VALTOTALIPI', 'VLRPIS', 'VLRCOFINS', 'OUTRASDESPESAS', 'VALTOTALNOTA', 'VTOTTRIB', 'MODFRETE', 'CODCLI', 'CODPAIS', 'NATOP1', 'CODNFIEDEST', 'CODMSGNFCE', 'MSGERRONFCE'];

	protected $table = 'NFCE';

	protected $primaryKey = 'CODNFCE';

}
