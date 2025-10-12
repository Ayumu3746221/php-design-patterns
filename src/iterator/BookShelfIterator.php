<?php

namespace Iterator;

use Iterator;
use Iterator\Book;
use Iterator\BookShelf;

class BookShelfIterator implements Iterator
{
        private BookShelf $bookShelf;
        private int $position;

        public function __construct(BookShelf $bookShelf)
        {
                $this->bookShelf = $bookShelf;
                $this->position = 0;
        }

        public function rewind(): void
        {
                $this->position = 0;
        }

        public function current(): Book
        {
                return $this->bookShelf->getBookAt($this->position);
        }

        public function key(): int
        {
                return $this->position;
        }

        public function next(): void
        {
                ++$this->position;
        }

        public function valid(): bool
        {
                return $this->position < $this->bookShelf->length();
        }
}

