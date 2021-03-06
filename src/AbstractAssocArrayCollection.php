<?php
//
// +---------------------------------------------------------------------+
// | CODE INC. SOURCE CODE                                               |
// +---------------------------------------------------------------------+
// | Copyright (c) 2018 - Code Inc. SAS - All Rights Reserved.           |
// | Visit https://www.codeinc.fr for more information about licensing.  |
// +---------------------------------------------------------------------+
// | NOTICE:  All information contained herein is, and remains the       |
// | property of Code Inc. SAS. The intellectual and technical concepts  |
// | contained herein are proprietary to Code Inc. SAS are protected by  |
// | trade secret or copyright law. Dissemination of this information or |
// | reproduction of this material is strictly forbidden unless prior    |
// | written permission is obtained from Code Inc. SAS.                  |
// +---------------------------------------------------------------------+
//
// Author:   Joan Fabrégat <joan@codeinc.fr>
// Date:     15/10/2018
// Project:  CollectionInterface
//
declare(strict_types=1);
namespace CodeInc\CollectionInterface;

/**
 * Class AbstractAssocArrayCollection
 *
 * @package CodeInc\CollectionInterface
 * @author Joan Fabrégat <joan@codeinc.fr>
 */
abstract class AbstractAssocArrayCollection implements CollectionInterface
{
    /**
     * @var array
     */
    protected $array = [];

    /**
     * @var int|null
     */
    private $iteratorPosition;

    /**
     * @var array|null
     */
    private $iteratorKeys;

    /**
     * @inheritdoc
     */
    public function rewind():void
    {
        $this->iteratorPosition = 0;
        $this->iteratorKeys = array_keys($this->array);
    }

    /**
     * @inheritdoc
     */
    public function next():void
    {
        $this->iteratorPosition++;
    }

    /**
     * @return int
     */
    public function key():int
    {
        return $this->iteratorKeys[$this->iteratorPosition];
    }

    /**
     * @inheritdoc
     * @return bool
     */
    public function valid():bool
    {
        return array_key_exists($this->iteratorPosition, $this->iteratorKeys)
            && array_key_exists($this->iteratorKeys[$this->iteratorPosition], $this->array);
    }

    /**
     * @return mixed
     */
    public function current()
    {
        return $this->array[$this->iteratorKeys[$this->iteratorPosition]];
    }
}