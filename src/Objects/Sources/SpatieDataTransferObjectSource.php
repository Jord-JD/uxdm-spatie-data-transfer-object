<?php

namespace JordJD\uxdm\Objects\Sources;

use JordJD\uxdm\Interfaces\SourceInterface;
use JordJD\uxdm\Objects\DataItem;
use JordJD\uxdm\Objects\DataRow;
use Spatie\DataTransferObject\DataTransferObject;
use Spatie\DataTransferObject\DataTransferObjectCollection;

class SpatieDataTransferObjectSource extends AssociativeArraySource implements SourceInterface
{
    public function __construct(DataTransferObjectCollection $collection)
    {
        $array = $collection->toArray();

        parent::__construct($array);
    }
}
