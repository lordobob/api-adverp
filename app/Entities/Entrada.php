<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Entrada extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXENTRADAS', 'OBS', 'DATA', 'NFDATA', 'PREVISAO', 'DTAJUSTECUSTO', 'FRETEISRAT', 'NF', 'OS', 'CODOS', 'NUMENT', 'CODFOR', 'PEDIDO', 'CODLOJA', 'CODUSUALT', 'CODTIPOENT', 'CODUSUCRIA', 'TIPO', 'ISBALANCO', 'FINALIZADA', 'COMPRAFABR', 'AJUSTECUSTOGRPCFG', 'DATAALT', 'DATACRIA', 'CNPJ', 'SEGURO', 'TOTALNF', 'ICMSFRETE', 'TOTVLRICMS', 'OUTRASDESPESAS', 'TOTVLRICMSSUBS', 'FRETEVLR', 'MODELO', 'SERIE', 'EMITENTE', 'TOTIPIFRETE', 'LOG', 'ISIPINOFRETE', 'NFINDPAG', 'NFDATASAIDA', 'CHAVENFE', 'PROTOCOLONFE', 'NFMODFRETE', 'DESABILITACALCAUTO', 'TOTBCALCICMS', 'TOTBCALCSUBST', 'TOTALIPI', 'ALIQCOFINS', 'ALIQPIS', 'VLRPIS', 'VLRCOFINS', 'TOTPRODNF'];

	protected $table = 'ENTRADAS';

	protected $primaryKey = 'CODENT';

}
