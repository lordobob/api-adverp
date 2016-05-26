<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Senha extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXSENHAS', 'CODVND', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'SENHA', 'OSMAXDESCITEM', 'LANLIMITEDESCONTOPCT', 'OS', 'OSALT', 'RELM1', 'RELM2', 'RELM3', 'RELM4', 'RELM5', 'RELM6', 'RELM7', 'RELM8', 'RELM9', 'OSINC', 'MOVOS', 'CADCLI', 'FECDIA', 'SAIDAS', 'CADFOR', 'CADGRP', 'ESTGAR', 'CADMOD', 'CADMAR', 'RELM10', 'TRANSF', 'CADPRO', 'CADSEN', 'CADSER', 'CADTEC', 'COMTEC', 'CADVEI', 'COMVND', 'ESTOQUE', 'MOVPROD', 'LUCROOS', 'MOVSERV', 'CADBANCO', 'FECCAIXA', 'REAJUPRO', 'EXCLUIOS', 'ENTRADAS', 'RELATSFIN', 'RELATSMOV', 'UTIBACKUP', 'CADCONTAS', 'SAIDASALT', 'SAIDASINC', 'SAIDASEXC', 'GERENCIAL', 'TRANSFALT', 'TRANSFEXC', 'VENDEDORES', 'UTIRESTORE', 'OCORRENCIA', 'CADTIPOPAG', 'CADFORMAPAG', 'LANOSOUTROS', 'ENTRADASINC', 'ENTRADASEXC', 'ENTRADASALT', 'CONSULTAFIN', 'RELATSOUTROS', 'PERGUNTALOJA', 'LANOSIMPORTA', 'LANVLRDIFPAR', 'LANOSEXCITENS', 'OSMUDAFECHADA', 'UTIBKPAVANCADO', 'ALTERAGRIDNOTA', 'UTILOTECELULAR', 'CADPROMUDAQTDE', 'LANCLIRESTRICAO', 'LANMOSTRACUSTOS', 'NAOPROTEGECAIXA', 'OSMUDAPRECOPROD', 'FINCONSALLPAGREC', 'LANOSOBRIGAPLACA', 'LANOSDESABDESCGERAL', 'LANACEITAMENOSMINIMO', 'LANOSNAOMUDATABPRECO', 'LANOSACEITAMENORCUSTO', 'LANOSIMPORTASOPROPRIA', 'LANCONPRODVERESTOQLOJAS', 'LANCADCLIPERMITEREPETIDO', 'LANOSOBRIGACLIPARACONSPROD', 'LANOSOBRIGASALVARSETEMITENS', 'FINNAOPERMITESOMAPARMAIOVENDA', 'DDD', 'CELULAR', 'USUARIO', 'DIGITAL', 'EMAIL', 'CODCTR', 'CODLOJA', 'ATIVDIASAVISO', 'BI', 'LANPED', 'CADCFOP', 'LANALMOX', 'PIPELINE', 'CADLOJAS', 'OSCANCELA', 'CADCLIALT', 'CADCLIEXC', 'LANOSIMP1', 'LANOSIMP2', 'LANOSIMP3', 'LANPEDALT', 'LANPEDEXC', 'MONTAGENS', 'FINALTLOJA', 'LANALMOXEXC', 'LANALMOXALT', 'PRODBALANCO', 'LANOSIMPREC', 'IMPRIMENOTA', 'LANEXPEDICAO', 'LANENTSOLINC', 'ABREDOISGRAF', 'LANLOGISTICA', 'LANOSCONSIMP', 'MONTAGENSEXC', 'MONTAGENSALT', 'LANALMOXEXPED', 'LANENTINCPROD', 'LANENTSOPOROS', 'LANOSIMPEMAIL', 'FILTRALOJAREL', 'LANALMOXAPROVA', 'LANENTFINALIZA', 'LANENTSOLAPROV', 'LANOSUSAPRECO1', 'LANOSUSAPRECO2', 'LANOSUSAPRECO3', 'LANOSUSAPRECO4', 'LANOSUSAPRECO5', 'LANOSESCRELPRI', 'LANOSALTAPOSNF', 'LANEXPEDICAOEXC', 'LANEXPEDICAOALT', 'AVISAATIVIDADES', 'LANALMOXEXPEDEXC', 'LANALMOXEXPEDALT', 'CADCLIACESSAHIST', 'LANOSNAOGARANTIA', 'LANOSOBRIGAPRAZO', 'LANOSVERDETVENDA', 'CONSPRODCODEXATO', 'EDITARELIMPRESSO', 'NFNAOPODECANCELAR', 'LANENTDESFINALIZA', 'LANOSNAOIMPABERTA', 'LANOSNAODESCTROCA', 'LANALMOXVESOCENTRO', 'FINLANCNAOALTPRAZO', 'LANALMOXVESOUNIDADE', 'CADNAOMOSTRAULTIMOS', 'LANOSNAOABREFECHADA', 'LANOSMOSTRAGRIDMATS', 'CADPRONAOCOMPOSICAO', 'LANTRANSFMUDASTATUS', 'LANOSIPROALTIMPRESSO', 'LANOSMOSTRAESCTABELA', 'LANPEDIDOSCOMPLIBERA', 'LANTRANSFNAORECSEMNF', 'LANOSLIBERAROSTRAVADA', 'LANOSNAOVENDESEMESTOQ', 'LANOSNAOABREOUTRALOJA', 'LANOSNAOINCPRODSEMEST', 'LANOSNAOIMPPARCINCONG', 'LANOSOBRIGASTATUSITEM', 'LANTRANSFSOLOJAENVREC', 'CADCLIAPENASPROPIALOJA', 'LANOSNAOVENDECLIRESTRI', 'LANTRANSFNAOMUDASOLREC', 'LANOSIMP1QNDORCVNDAMBOS', 'LANOSIMP2QNDORCVNDAMBOS', 'LANOSIMP3QNDORCVNDAMBOS', 'FINPARCNAOINICIATIPOPAG', 'LANTRANSFSOINCCOMOSOLIC', 'LANOSNAOVNDMENOSMINTOTAL', 'LANTRANSFSOLOJAENTSAICONS', 'LANTRANSFNAOENVIASEMESTOQ', 'LANOSAPENASDESCITEMOUTOTAL', 'LANOSIMPEMAILQNDORCVNDAMBOS', 'FINNAOPERMITESOMAPARMENORVENDA', 'EMAILNOME', 'EMAILHOST', 'EMAILLOGIN', 'CONSPRODCODLOJASOUT', 'NOME', 'EMAILSENHA', 'SKIN', 'LANENTRECMAXEXCEDE', 'LANENTCOT', 'LANENTCOTEXC', 'LANENTCOTALT', 'LANCADEDITAPORGRID', 'PORTAPOP', 'PORTASMTP', 'ISSSLPOP', 'ISSSLSMTP', 'SMTPREQAUT', 'EMAILHOSTPOP', 'UTIAGENDA', 'UTIATIVIDADE', 'ECFCHAMAFIN', 'LANOSALTERATEMPOGASTO', 'LANENTDEV', 'LANENTDEVEXC', 'LANENTDEVALT', 'REPONSAVELTI', 'RESPONSAVELGERAL', 'LANOSMOSTRAULTCOMPPROD', 'LANENTDEVINCPROD', 'LANENTDEVALTSTATUS', 'LANENTDEVMULTIMPORT', 'LANENTDEVALTUNIDADE', 'LANENTDEVFORAGARANTIA', 'LANOSNACTAPVENTMENPRA', 'LANOSNAOACEITAPREVENTMENORPRAZO', 'CONSPRODPRAZOESTNEGAT', 'LANENTDEVALTGRID', 'LANOSPERMITESALVARCOMDESC', 'RELFILTRAVND', 'CODSENHAGRU', 'CODGERENTE', 'LANOSCONSONLYSUBORD', 'CADCLIDEBITOS', 'CADPORTADOR', 'CADGRUPOCATEGORIA', 'FINCANCPARCELA', 'FINCANCPAGAM', 'FINPAGAMRECIBO', 'FINPAGAMCHEQUE', 'FINQUITARDIRETO', 'FINPAGAMENTOS', 'CRMVENDAFINAN', 'CRMDEVOLUCOES', 'CRMRESUMO', 'CRMVENDAITEN', 'CRMEXPEDICOES', 'LANEXPFINAN', 'ACESSASISTEMA', 'CODRELOGPONTOPERFIL', 'ADMPONTO', 'FINANDIASTOLEPAG', 'DTADMISSAO', 'MATRICULA', 'CODDEPART', 'VEALLCLIIGNORACONFIG', 'NEXPQTDEEXPMENOR', 'NAOACESSAADVATIV', 'BIGRAFICOS', 'CRM', 'IP', 'LANOSPERMITEDESFINALIZAR', 'CNAB', 'CONSULTANFE'];

	protected $table = 'SENHAS';

	protected $primaryKey = 'CODUSU';

}
