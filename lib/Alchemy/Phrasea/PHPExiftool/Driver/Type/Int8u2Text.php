<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Type;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractType;

class Int8u2Text extends AbstractType
{

    protected $ExiftoolName = 'Int8u2Text';

    protected $PHPMap = 'int';

}