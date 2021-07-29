<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\FLIR;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class Reading3Units extends AbstractTag
{

    protected $Id = 226;

    protected $Name = 'Reading3Units';

    protected $FullName = 'FLIR::MeterLink';

    protected $GroupName = 'FLIR';

    protected $g0 = 'APP1';

    protected $g1 = 'FLIR';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Reading 3 Units';

    protected $Values = array(
        13 => array(
            'Id' => 13,
            'Label' => 'C',
        ),
        27 => array(
            'Id' => 27,
            'Label' => '%',
        ),
        29 => array(
            'Id' => 29,
            'Label' => 'rel',
        ),
        36 => array(
            'Id' => 36,
            'Label' => 'g/kg',
        ),
    );

}