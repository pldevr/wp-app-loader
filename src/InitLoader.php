<?php

namespace Devr\Loader;

final class InitLoader extends AbstractLoader
{
    public function run(): void
    {
        add_action(
            'init',
            function () {
                $this->loadFiles(
                    $this->pattern,
                    function ($file) {
                        include_once $file;
                    }
                );
            }
        );
    }
}
