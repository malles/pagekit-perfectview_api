<?php

namespace Bixie\PerfectviewApi\ApiTrait;

use Bixie\PerfectviewApi\PerfectviewApiException;
use Phpro\SoapClient\CodeGenerator\Config\ConfigInterface;
use Phpro\SoapClient\CodeGenerator\Model\TypeMap;
use Phpro\SoapClient\CodeGenerator\TypeGenerator;
use Phpro\SoapClient\Soap\SoapClient;
use Phpro\SoapClient\Util\Filesystem;
use Zend\Code\Generator\FileGenerator;

trait GeneratorApiTrait {

    /**
     * @var Filesystem
     */
    private $filesystem;

    /**
     * @return Filesystem
     */
    public function getFilesystem () {
        if (!isset($this->filesystem)) {
            $this->filesystem =  new Filesystem();
        }
        return $this->filesystem;
    }


    /**
     * @return array
     */
    public function generateTypeClasses () {

        $generated = [];
        $config = include __DIR__ . '/../../phpro-config.php';
        if (!$config instanceof ConfigInterface) {
            throw new \InvalidArgumentException('No config found');
        }
        $soapClient = new SoapClient($config->getWsdl(), $config->getSoapOptions());
        $typeMap = TypeMap::fromSoapClient('Bixie\PerfectviewApi\SoapTypes', $soapClient);
        $generator = new TypeGenerator($config->getRuleSet());

        foreach ($typeMap->getTypes() as $type) {
            $path = $type->getPathname($config->getDestination());
            if ($this->getFilesystem()->fileExists($path)) unlink($path);
            try {
                $file = new FileGenerator();
                $code = $generator->generate($file, $type);
                $this->getFilesystem()->putFileContents($path, $code);
                $generated[] = sprintf('Generated class %s to %s', $type->getFullName(), $path);

                if (count($generated) == 20) break;

            } catch (\Exception $e) {
                throw new PerfectviewApiException($e->getMessage());
            }
        }

        return $generated;
    }

}