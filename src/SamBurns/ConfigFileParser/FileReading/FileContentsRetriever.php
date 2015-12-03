<?php
namespace SamBurns\ConfigFileParser\FileReading;

use SamBurns\ConfigFileParser\Exception\FileNotReadable;

class FileContentsRetriever
{
    /**
     * @throws FileNotReadable
     *
     * @param string $path
     * @return string
     */
    public function fileGetContents($path)
    {
        if (!is_readable($path)) {
            throw FileNotReadable::constructWithPath($path);
        }
        return file_get_contents($path);
    }
}