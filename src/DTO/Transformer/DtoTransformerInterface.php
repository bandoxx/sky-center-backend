<?php

namespace App\DTO\Transformer;

interface DtoTransformerInterface
{

    public function transformFromObject($object);
    public function transformFromObjects(iterable $objects): iterable;

}