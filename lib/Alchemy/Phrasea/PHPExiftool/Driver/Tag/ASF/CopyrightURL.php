<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\ASF;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class CopyrightURL extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'CopyrightURL';

    protected $FullName = 'mixed';

    protected $GroupName = 'ASF';

    protected $g0 = 'ASF';

    protected $g1 = 'ASF';

    protected $g2 = 'mixed';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Copyright URL';

    protected $local_g2 = 'mixed';

}