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
 * Class AbstractCountableAssocArrayCollection
 *
 * @package CodeInc\CollectionInterface
 * @author Joan Fabrégat <joan@codeinc.fr>
 */
class AbstractCountableAssocArrayCollection extends AbstractAssocArrayCollection implements CountableCollectionInterface
{
    /**
     * @inheritdoc
     * @return int
     */
    public function count():int
    {
        return count($this->array);
    }
}