<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\XMPIptcExt;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class StreamReady extends AbstractTag
{

    protected $Id = 'StreamReady';

    protected $Name = 'StreamReady';

    protected $FullName = 'XMP::iptcExt';

    protected $GroupName = 'XMP-iptcExt';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-iptcExt';

    protected $g2 = 'Author';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Stream Ready';

    protected $local_g2 = 'Video';

    protected $Values = array(
        false => array(
            'Id' => false,
            'Label' => false,
        ),
        true => array(
            'Id' => true,
            'Label' => true,
        ),
        'unknown' => array(
            'Id' => 'unknown',
            'Label' => 'Unknown',
        ),
    );

}