<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\NikonCustom;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class LiveViewAF extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'LiveViewAF';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Live View AF';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Face Priority',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Wide Area',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Normal Area',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Subject Tracking',
        ),
        4 => array(
            'Id' => 0,
            'Label' => 'Face Priority',
        ),
        5 => array(
            'Id' => 1,
            'Label' => 'Wide Area',
        ),
        6 => array(
            'Id' => 2,
            'Label' => 'Normal Area',
        ),
    );

}