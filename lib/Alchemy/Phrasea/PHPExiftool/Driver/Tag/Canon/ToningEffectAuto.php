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
class ToningEffectAuto extends AbstractTag
{

    protected $Id = 164;

    protected $Name = 'ToningEffectAuto';

    protected $FullName = 'Canon::PSInfo2';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Toning Effect Auto';

    protected $flag_Permanent = true;

    protected $Values = array(
        '-559038737' => array(
            'Id' => '-559038737',
            'Label' => 'n/a',
        ),
        0 => array(
            'Id' => 0,
            'Label' => 'None',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Sepia',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Blue',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Purple',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Green',
        ),
    );

}