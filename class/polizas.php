<?php 		
/*
*  Clase creada para polizas modelo Coi 7.0
*  La clase esta basada en tomar informacion de una base de datos de aspel sae, bancos y lectura de cfdi de proveedores.
*  Version 0.01
*  Creador Jesus Ramirez Velasco
*  jesusmarcos81@gmail.com
*
*/

$xmlcoi = new SimpleXMLElement ('<?xml version="1.0" standalone="yes"?><DATAPACKET Version="2.0"></DATAPACKET>');
$metadata = $xmlcoi->addChild('METADATA');
$fields = $metadata->addChild('FIELDS');
$fieldversion = $fields->addChild('FIELD');
$fieldversion->addAttribute('attrname','VersionCOI');
$fieldversion->addAttribute('fieldtype','i2');
$fieldtipo = $fields->addChild('FIELD');
$fieldtipo->addAttribute('attrname','TipoPoliz');
$fieldtipo->addAttribute('fieldtype','string');
$fieldtipo->addAttribute('WIDTH','5');
$fielddiapol = $fields->addChild('FIELD');
$fielddiapol->addAttribute('attrname','DiaPoliz');
$fielddiapol->addAttribute('fieldtype','string');
$fielddiapol->addAttribute('WIDTH','2');
$fieldconcepto = $fields->addChild('FIELD');
$fieldconcepto->addAttribute('attrname','ConcepPoliz');
$fieldconcepto->addAttribute('fieldtype','string');
$fieldconcepto->addAttribute('WIDTH','120');
$fielduuid = $fields->addChild('FIELD');
$fielduuid->addAttribute('attrname','UUID');
$fielduuid->addAttribute('fieldtype','string');
$fielduuid->addAttribute('WIDTH','100');
$fieldpartidas = $fields->addChild('FIELD');
$fieldpartidas->addAttribute('attrname','Partidas');
$fieldpartidas->addAttribute('fieldtype','nested');
$fieldspartidas = $fieldpartidas->addChild('FIELDS');

$fieldcuenta = $fieldspartidas->addChild('FIELD');
$fieldcuenta->addAttribute('attrname','Cuenta');
$fieldcuenta->addAttribute('fieldtype','string');
$fieldcuenta->addAttribute('WIDTH','21');
$fielddepto = $fieldspartidas->addChild('FIELD');
$fielddepto->addAttribute('attrname','Depto');
$fielddepto->addAttribute('fieldtype','i4');
$fieldconceptopol = $fieldspartidas->addChild('FIELD');
$fieldconceptopol->addAttribute('attrname','ConceptoPol');
$fieldconceptopol->addAttribute('fieldtype','string');
$fieldconceptopol->addAttribute('WIDTH','120');
$fieldmonto = $fieldspartidas->addChild('FIELD');
$fieldmonto->addAttribute('attrname','Monto');
$fieldmonto->addAttribute('fieldtype','r8');
$fieldtcambio = $fieldspartidas->addChild('FIELD');
$fieldtcambio->addAttribute('attrname','TipoCambio');
$fieldtcambio->addAttribute('fieldtype','r8');
$fielddebehaber = $fieldspartidas->addChild('FIELD');
$fielddebehaber->addAttribute('attrname','DebeHaber');
$fielddebehaber->addAttribute('fieldtype','string');
$fielddebehaber->addAttribute('WIDTH','1');
$fieldccostos = $fieldspartidas->addChild('FIELD');
$fieldccostos->addAttribute('attrname','ccostos');
$fieldccostos->addAttribute('fieldtype','i4');
$fieldproyectos = $fieldspartidas->addChild('FIELD');
$fieldproyectos->addAttribute('attrname','proyectos');
$fieldproyectos->addAttribute('fieldtype','i4');
$fieldporcentaje = $fieldspartidas->addChild('FIELD');
$fieldporcentaje->addAttribute('attrname','Porcentaje');
$fieldporcentaje->addAttribute('fieldtype','r8');
$fieldfrmpago = $fieldspartidas->addChild('FIELD');
$fieldfrmpago->addAttribute('attrname','FRMPAGO');
$fieldfrmpago->addAttribute('fieldtype','string');
$fieldfrmpago->addAttribute('WIDTH','1');
$fieldnumcheque = $fieldspartidas->addChild('FIELD');
$fieldnumcheque->addAttribute('attrname','NUMCHEQUE');
$fieldnumcheque->addAttribute('fieldtype','string');
$fieldnumcheque->addAttribute('WIDTH','20');
$fieldmontobn = $fieldspartidas->addChild('FIELD');
$fieldmontobn->addAttribute('attrname','MONTOBN');
$fieldmontobn->addAttribute('fieldtype','r8');
$fieldbanco = $fieldspartidas->addChild('FIELD');
$fieldbanco->addAttribute('attrname','BANCO');
$fieldbanco->addAttribute('fieldtype','i4');
$fieldctaorig = $fieldspartidas->addChild('FIELD');
$fieldctaorig->addAttribute('attrname','CTAORIG');
$fieldctaorig->addAttribute('fieldtype','string');
$fieldctaorig->addAttribute('WIDTH','50');
$fieldbeneficiario = $fieldspartidas->addChild('FIELD');
$fieldbeneficiario->addAttribute('attrname','BENEF');
$fieldbeneficiario->addAttribute('fieldtype','string');
$fieldbeneficiario->addAttribute('WIDTH','300');
$fieldrfc = $fieldspartidas->addChild('FIELD');
$fieldrfc->addAttribute('attrname','RFC');
$fieldrfc->addAttribute('fieldtype','string');
$fieldrfc->addAttribute('WIDTH','13');
$fieldbancodest = $fieldspartidas->addChild('FIELD');
$fieldbancodest->addAttribute('attrname','BANCODEST');
$fieldbancodest->addAttribute('fieldtype','i4');
$fieldctadest = $fieldspartidas->addChild('FIELD');
$fieldctadest->addAttribute('attrname','CTADEST');
$fieldctadest->addAttribute('fieldtype','string');
$fieldctadest->addAttribute('WIDTH','50');
$fieldfechacheque = $fieldspartidas->addChild('FIELD');
$fieldfechacheque->addAttribute('attrname','FECHACHEQUE');
$fieldfechacheque->addAttribute('fieldtype','string');
$fieldfechacheque->addAttribute('WIDTH','10');
$fieldiduuid = $fieldspartidas->addChild('FIELD');
$fieldiduuid->addAttribute('attrname','IDUUID');
$fieldiduuid->addAttribute('fieldtype','i4');
$fieldcdspartidasuuid = $fieldspartidas->addChild('FIELD');
$fieldcdspartidasuuid->addAttribute('attrname','CDSPartidasUUID');
$fieldcdspartidasuuid->addAttribute('fieldtype','nested');
$fieldspartidasuuid = $fieldcdspartidasuuid->addChild('FIELDS');


$fieldnumreg = $fieldspartidasuuid->addChild('FIELD');
$fieldnumreg->addAttribute('attrname','NUMREG');
$fieldnumreg->addAttribute('fieldtype','i4');
$fielduuidtimbre = $fieldspartidasuuid->addChild('FIELD');
$fielduuidtimbre->addAttribute('attrname','UUIDTIMBRE');
$fielduuidtimbre->addAttribute('fieldtype','string');
$fielduuidtimbre->addAttribute('WIDTH','36');
$fieldmonto = $fieldspartidasuuid->addChild('FIELD');
$fieldmonto->addAttribute('attrname','MONTO');
$fieldmonto->addAttribute('fieldtype','r8');
$fieldserie = $fieldspartidasuuid->addChild('FIELD');
$fieldserie->addAttribute('attrname','SERIE');
$fieldserie->addAttribute('fieldtype','string');
$fieldserie->addAttribute('WIDTH','100');
$fieldfolio = $fieldspartidasuuid->addChild('FIELD');
$fieldfolio->addAttribute('attrname','FOLIO');
$fieldfolio->addAttribute('fieldtype','string');
$fieldfolio->addAttribute('WIDTH','100');
$fieldrfcemisor = $fieldspartidasuuid->addChild('FIELD');
$fieldrfcemisor->addAttribute('attrname','RFCEMISOR');
$fieldrfcemisor->addAttribute('fieldtype','string');
$fieldrfcemisor->addAttribute('WIDTH','16');
$fieldrfcreceptor = $fieldspartidasuuid->addChild('FIELD');
$fieldrfcreceptor->addAttribute('attrname','RFCRECEPTOR');
$fieldrfcreceptor->addAttribute('fieldtype','string');
$fieldrfcreceptor->addAttribute('WIDTH','16');
$fieldfechauuid = $fieldspartidasuuid->addChild('FIELD');
$fieldfechauuid->addAttribute('attrname','FECHAUUID');
$fieldfechauuid->addAttribute('fieldtype','string');
$fieldfechauuid->addAttribute('WIDTH','10');

$paramspartidasuuid = $fieldcdspartidasuuid->addChild('PARAMS');
$paramspartidas = $fieldpartidas->addChild('PARAMS');
$paramsgeneral = $metadata->addChild('PARAMS');

/* ingresamos datos de prueba*/
		$rowdata = $xmlcoi->addChild('ROWDATA');
		$rowtitulo= $rowdata->addChild('ROW');
		$rowtitulo->addAttribute('VersionCOI','701');
		$rowtitulo->addAttribute('TipoPoliz','Dr');
		$rowtitulo->addAttribute('DiaPoliz','29');
		$rowtitulo->addAttribute('ConcepPoliz','Ventas del Dia');
/*$partidascuentas = $rowtitulo->addChild('Partidas');*/

/* Creamos partida de prueba
$rowpartidas[0] = $partidascuentas->addChild('ROWPartidas');
$rowpartidas[0]->addAttribute('Cuenta','1103-0020-0009-0001-2');
$rowpartidas[0]->addAttribute('Depto','0');
$rowpartidas[0]->addAttribute('ConceptoPol','E4807 170.52 14.5872');
$rowpartidas[0]->addAttribute('Monto','2487.41');
$rowpartidas[0]->addAttribute('TipoCambio','14.5872');
$rowpartidas[0]->addAttribute('DebeHaber','D');
$rowpartidas[0]->addAttribute('ccostos','0');
$rowpartidas[0]->addAttribute('proyectos','0');
$rowpartidas[0]->addAttribute('FRMPAGO','');
$rowpartidas[0]->addAttribute('NUMCHEQUE','');
$rowpartidas[0]->addAttribute('MONTOBN','0');
$rowpartidas[0]->addAttribute('BANCO','0');
$rowpartidas[0]->addAttribute('CTAORIG','');
$rowpartidas[0]->addAttribute('BENEF','');
$rowpartidas[0]->addAttribute('RFC','');
$rowpartidas[0]->addAttribute('BANCODEST','0');
$rowpartidas[0]->addAttribute('CTADEST','');
$rowpartidas[0]->addAttribute('FECHACHEQUE','');
$rowpartidas[0]->addAttribute('IDUUID','0');

/*creamos uuid de prueba

$cdspartidas = $rowpartidas[0]->addChild('CDSPartidasUUID');
$rowpartidasuuid[1] = $cdspartidas->addChild('ROWCDSPartidasUUID');
$rowpartidasuuid[1]->addAttribute('NUMREG','1');
$rowpartidasuuid[1]->addAttribute('UUIDTIMBRE','B185A06E-C094-45B8-B6C1-416F09A8D04B');
$rowpartidasuuid[1]->addAttribute('MONTO', '170.520045');
$rowpartidasuuid[1]->addAttribute('SERIE','E');
$rowpartidasuuid[1]->addAttribute('FOLIO','4807');
$rowpartidasuuid[1]->addAttribute('RFCEMISOR','AIR9007129M1');
$rowpartidasuuid[1]->addAttribute('RFCRECEPTOR','TME931214KU6');
$rowpartidasuuid[1]->addAttribute('FECHAUUID','29/01/2014');*/





















echo $xmlcoi->asXML();
?>