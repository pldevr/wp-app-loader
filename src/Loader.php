<?php

namespace Devr\Loader;

final class Loader extends AbstractLoader
{
    public function run(): void
    {
        $this->loadFiles(
            $this->pattern,
            function ($file) {
                include_once $file;
            }
        );
    }
}
