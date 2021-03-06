<?php

namespace App\Entities;

class Tipoentrada extends FirebirdModel
{

	protected $fillable = ['AUXTIPOENTRADAS', 'CODUSUALT', 'CODUSUCRIA', 'NAOATUCUSTO', 'QTDENEGATIVA', 'REAJUSTECUSTOORGPUBL', 'DATAALT', 'DATACRIA', 'TIPOENTRADA', 'NAOALTERAESTOQUE', 'NAOGERAFINAN', 'ISIMPORTACAO', 'CADINATIVO', 'ISTRIBUTAVEL', 'CST', 'OBSNF', 'ZERAIPI', 'ZERAICMS', 'ALTESTFISICO', 'ABREV', 'CODTIPONF'];

	protected $table = 'TIPOENTRADAS';

	protected $primaryKey = 'CODTIPOENT';

}
