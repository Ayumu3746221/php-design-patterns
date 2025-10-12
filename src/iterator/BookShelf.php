<?php

namespace Iterator;

use Iterator\Book;
use Iterator\BookShelfIterator;
use IteratorAggregate;
use Traversable;

class BookShelf implements IteratorAggregate
{
        /**
         * @var Book
         */
        private array $books = [];
        private int $last = 0;

        public function getBookAt(int $index): Book
        {
                return $this->books[$index];
        }

        public function appendBook(Book $book): void
        {
                $this->books[$this->last] = $book;
                $this->last += 1;
        }

        public function length(): int
        {
                return $this->last;
        }

        public function getIterator(): Traversable
        {
                return new BookShelfIterator($this);
        }
}
