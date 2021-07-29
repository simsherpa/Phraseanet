<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\Canon;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class InitialAFPointInServo extends AbstractTag
{

    protected $Id = 19;

    protected $Name = 'InitialAFPointInServo';

    protected $FullName = 'Canon::AFConfig';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Initial AF Point In Servo';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Initial AF Point Selected',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Manual AF Point',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Auto',
        ),
    );

}