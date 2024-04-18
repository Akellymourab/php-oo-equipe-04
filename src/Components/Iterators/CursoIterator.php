<?php

declare(strict_types=1);

namespace App\Components\Iterators;

use Iterator;

class CursoIterator implements Iterator
{
    private array $cursos;
    private int $index = 0;

    public function __construct(array $cursos)
    {
        $this->cursos = $cursos;
    }

    public function current(): mixed
    {
        return $this->cursos[$this->index];
    }

    public function next(): void
    {
        $this->index++;
    }

    public function key(): int
    {
        return $this->index;
    }

    public function valid(): bool
    {
        return isset($this->cursos[$this->index]);
    }

    public function rewind(): void
    {
        $this->index = 0;
    }
}