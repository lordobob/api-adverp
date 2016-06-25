<?php

namespace App\Entities;

class Entcotacoe extends FirebirdModel
{

	protected $fillable = ['AUXENTCOTACOES', 'OBS', 'DATA', 'PREVISAO', 'CODFOR', 'CODLOJA', 'NUMENTCOT', 'CODUSUALT', 'CODTIPOENT', 'CODUSUCRIA', 'ISMODELO', 'ISAPROVADO', 'DATAALT', 'DATACRIA', 'CONDPAG', 'SEGURO', 'TOTALNF', 'FRETEVLR', 'ICMSFRETE', 'TOTVLRICMS', 'OUTRASDESPESAS', 'TOTVLRICMSSUBS', 'PRAZORESPOSTA', 'CODENTCOTORI', 'ISRESPONDIDO', 'ISFINALIZADA'];

	protected $table = 'ENTCOTACOES';

	protected $primaryKey = 'CODENTCOT';

}
