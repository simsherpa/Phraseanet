<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\Sony;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class SonyRtmd0xe302 extends AbstractTag
{

    protected $Id = 58114;

    protected $Name = 'Sony_rtmd_0xe302';

    protected $FullName = 'Sony::rtmd';

    protected $GroupName = 'Sony';

    protected $g0 = 'Sony';

    protected $g1 = 'Sony';

    protected $g2 = 'Video';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Sony rtmd 0xe302';

}