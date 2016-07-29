<?php

// my-soap-config.php
//@todo include FluentSetterAssembler from own package!
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Assembler;

return Config::create()
	->setWsdl('https://api.perfectview.nl/V1/perfectview.asmx?WSDL')
	->setDestination('/var/www/pagekit/packages/bixie/perfectview_api/src/SoapTypes')
	->setNamespace('Bixie\PerfectviewApi\SoapTypes')
	->addRule(new Rules\AssembleRule(new Assembler\FluentSetterAssembler()))
	->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler()))
	->addRule(new Rules\AssembleRule(new Assembler\MethodAssembler('Bixie\PerfectviewApi\Client\PerfectviewMethodInterface')))
	->addRule(new Rules\TypenameMatchesRule(
		new Rules\AssembleRule(new Assembler\RequestAssembler()),
		'/Request$/'
	))
	->addRule(new Rules\TypenameMatchesRule(
		new Rules\AssembleRule(new Assembler\ResultAssembler()),
		'/Response$/'
	))
	;