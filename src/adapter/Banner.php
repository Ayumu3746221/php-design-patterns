<?php

namespace Adapter;

class Banner
{
        private string $string;

        public function __construct(string $string)
        {
                $this->string = $string;
        }

        public function showWithParen(): void
        {
                echo '(' . $this->string . ')';
        }

        public function showWithAster(): void
        {
                echo '*' . $this->string . '*';
        }
}

