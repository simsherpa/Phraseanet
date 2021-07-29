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
class AutoBracketingMode extends AbstractTag
{

    protected $Id = '12.3';

    protected $Name = 'AutoBracketingMode';

    protected $FullName = 'NikonCustom::SettingsD800';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Auto Bracketing Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Flash/Speed',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Flash/Speed/Aperture',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Flash/Aperture',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Flash Only',
        ),
    );

}