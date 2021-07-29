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

class ShortLine extends AbstractType
{

    protected $ExiftoolName = 'ShortLine';

    protected $PHPMap = 'string';

}