<?php

namespace Adapter;

use Adapter\MyPrint;
use Adapter\Banner;

class PrintBanner extends Banner implements MyPrint
{
        public function __construct(string $string)
        {
                parent::__construct($string);
        }

        public function printWeak(): void
        {
                $this->showWithParen();
        }

        public function printStrong(): void
        {
                $this->showWithAster();
        }
}
