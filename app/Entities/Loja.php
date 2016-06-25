<?php

namespace App\Entities;

class Loja extends FirebirdModel
{

	protected $fillable = ['AUXLOJAS', 'CODUSUALT', 'CODUSUCRIA', 'OSPRECOPADRAO', 'DATAALT', 'DATACRIA', 'UF', 'LOJA', 'NUMERO', 'CEP', 'FAX', 'CIDADE', 'BAIRRO', 'IMUNICIPAL', 'DESCLOJA', 'SMTP', 'SMTPMAIL', 'SMTPPASS', 'SMTPLOGIN', 'CONTATOMAIL', 'ENDERECO', 'TELEFONE', 'COMPLEMENTO', 'IE', 'RAZAO', 'CNPJ', 'CONTATO', 'ISSIMPLES', 'CMUNFG', 'CODREVENDA', 'NOMEREVENDA', 'ALIQICMSSIMPLES', 'CSTPIS', 'CSTCOFINS', 'CNAE', 'IMPOSTOBASE', 'COMISSAOBASE', 'PATHECFSOLUCAO', 'FANTASIA', 'SITE', 'EMAIL', 'TELEFONE2', 'OBS1', 'OBS2', 'OBS3', 'EXPORTASPED', 'ALIQIMPOSTOSIMPLES'];

	protected $table = 'LOJAS';

	protected $primaryKey = 'CODLOJA';

}
