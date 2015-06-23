<?php

namespace Raml\FileLoader;

use JsonSchema\Uri\UriRetriever;
use JsonSchema\RefResolver;
use \Raml\Exception\InvalidJsonException;

/**
 *
 */
class JsonDataFileLoader implements FileLoaderInterface
{
    public function loadFile($filePath)
    {
		$json = json_decode(file_get_contents($filePath));
		return json_encode($json);
    }

    public function getValidExtensions()
    {
        return ['json_data'];
    }
}
