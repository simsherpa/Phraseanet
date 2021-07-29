<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\MIEGPS;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class GPSSpeed extends AbstractTag
{

    protected $Id = 'Speed';

    protected $Name = 'GPSSpeed';

    protected $FullName = 'MIE::GPS';

    protected $GroupName = 'MIE-GPS';

    protected $g0 = 'MIE';

    protected $g1 = 'MIE-GPS';

    protected $g2 = 'Location';

    protected $Type = 'rational64s';

    protected $Writable = true;

    protected $Description = 'GPS Speed';

}