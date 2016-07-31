<?php

// my-soap-config.php
//@todo include Custom Assemblers from own package!
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Assembler;

return Config::create()
	->setWsdl('https://api.perfectview.nl/V1/perfectview.asmx?WSDL')
	->setDestination('/var/www/pagekit/packages/bixie/perfectview_api/src/SoapTypes')
	->setNamespace('Bixie\PerfectviewApi\SoapTypes')
	->addRule(new Rules\AssembleRule(new Assembler\FluentSetterAssembler()))
	->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler()))
	->addRule(new Rules\AssembleRule(new Assembler\MethodAssembler(
		'Bixie\PerfectviewApi\Client\PerfectviewMethodInterface')))
	->addRule(new Rules\AssembleRule(new Assembler\EntityTypeAssembler(
		'Bixie\PerfectviewApi\Client\PerfectviewEntityTypeInterface',
		'Bixie\PerfectviewApi\Client\PerfectviewEntityTypeTrait', 'PerfectviewEntityTypeTrait')))
	->addRule(new Rules\AssembleRule(new Assembler\JsonSerializableAssembler(
		'Bixie\PerfectviewApi\Client\JsonSerializableTrait', 'JsonSerializableTrait')))
	->addRule(new Rules\TypenameMatchesRule(
		new Rules\AssembleRule(new Assembler\RequestAssembler()),
		'/Request$/'
	))
	->addRule(new Rules\TypenameMatchesRule(
		new Rules\AssembleRule(new Assembler\ResultAssembler()),
		'/Response$/'
	))
	->addRule(new Rules\TypenameMatchesRule(
		new Rules\AssembleRule(new Assembler\ResultTraitAssembler(
			'Bixie\PerfectviewApi\Client\PerfectviewResultInterface',
			'Bixie\PerfectviewApi\Client\PerfectviewResultTrait'
		)),
		'/Result$/'
	))
	;