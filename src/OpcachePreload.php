<?php
namespace ML\Contracts;

interface OpcachePreload
{
    /**
     * @return string|null
     *
     * Returns a expected full absolute path to a PHP opcache.preload file. The file does not have
     * to exist on the filesystem when calling this method.
     *
     * Returns null if there will not be a opache.preload file.
     *
     */
    public function getFilename(): ?string;
}
