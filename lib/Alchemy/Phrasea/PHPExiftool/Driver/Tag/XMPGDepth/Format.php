<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\XMPGDepth;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class Format extends AbstractTag
{

    protected $Id = 'Format';

    protected $Name = 'Format';

    protected $FullName = 'XMP::GDepth';

    protected $GroupName = 'XMP-GDepth';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-GDepth';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Format';

    protected $flag_Avoid = true;

    protected $Values = array(
        'RangeInverse' => array(
            'Id' => 'RangeInverse',
            'Label' => 'RangeInverse',
        ),
        'RangeLinear' => array(
            'Id' => 'RangeLinear',
            'Label' => 'RangeLinear',
        ),
    );

}