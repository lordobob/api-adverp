<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Tipospag extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXTIPOSPAG', 'OBRICLICEP', 'QUITARAUTO', 'OBRICLICPCN', 'OBRICLIRGIE', 'OBRICLIENDERECO', 'ADIC', 'AUXILIAR', 'CODUSUALT', 'CODUSUCRIA', 'OBRICLICEI', 'SOMASUB', 'INTERNO', 'DATAALT', 'DATACRIA', 'ABREVIACAO', 'DESCRICAO', 'SEQUENCIACNAB', 'APLICDESCTODOSPAGREC', 'NOMEARQUIVOCNAB', 'LAYOUTCNAB', 'CODIGOCEDENTE', 'TIPOIMPRESSAOCNAB', 'DIRETORIOCNAB', 'ARQUIVOLICENCACOBREBEMX', 'ISTEF', 'CADINATIVO', 'PCTTAXA', 'TAXABOLETO', 'DIASPREVISAO', 'BOLETONAOGERANOSSONUM', 'ESPECIEDOC', 'INSTR1', 'INSTR2', 'ADIC1', 'DIASPROTESTO', 'CNAB_VALORNAOIDENTIFICADO', 'CNAB_OUTRODADOCONFIGURACAO2', 'CNAB_INSTRUCAOCOBRANCA3', 'CNAB_VALORINSTRUCAOCOBRANCA1', 'CNAB_VALORINSTRUCAOCOBRANCA2', 'CNAB_VALORINSTRUCAOCOBRANCA3', 'CNAB_ACAOCOBRANCAREMESSA', 'CNAB_DIASPROTESTO', 'CNAB_INSTRUCAOCOBRANCA1', 'CNAB_INSTRUCAOCOBRANCA2', 'CNAB_OUTRODADOCONFIGURACAO1', 'CNAB_SACADOR', 'CNAB_NOSSONUMEROFIXO', 'CNAB_ISNOSSONUMEROFIXO', 'CNAB_ESPECIEDOC', 'CNAB_BANCOGERANOSSONUM', 'CNAB_ISUSADUPLLETRA', 'CNAB_NOSSONUMRETIRADIG', 'CNAB_ACEITE', 'CNAB_BANCOEMITEBOLETO', 'CNAB_LOCALPAG', 'CNAB_LINHAOBS1', 'CNAB_LINHAOBS2', 'CNAB_LINHAOBS3', 'CNAB_LINHAOBS4', 'CNAB_USARENDCOB', 'CNAB_IMPRIMEITENS', 'CNAB_SEMDEMONSTRATIVO', 'CNAB_MARGEMESQ', 'CNAB_MARGEMSUP', 'CNAB_MARCATODOS', 'CNAB_LOGOTIPOBOLETO', 'CNAB_CODPARSTATQUITA', 'CNAB_CODPARSTATGERA', 'CNAB_CODPARSTATDESVINC', 'CNAB_PCTMORA', 'CNAB_PCTMULTA', 'CNAB_IMPRIMENUMERONF', 'CNAB_DIASADICPAGAM', 'CNAB_LAYOUTRETORNO', 'CNAB_FORMACADASTRAMENTO', 'CNAB_ISAGRUPADIA', 'CNAB_QUITA_CRED_PAGO', 'CNAB_DATA_OCORR_CRED', 'CNAB_ISSICRED', 'CNAB_CONTAPARANOME', 'CNAB_MD1_NOME', 'CNAB_MD1_VALOR', 'CNAB_MD2_NOME', 'CNAB_MD2_VALOR', 'CNAB_MD3_NOME', 'CNAB_MD3_VALOR'];

	protected $table = 'TIPOSPAG';

	protected $primaryKey = 'CODTIPO';

}
