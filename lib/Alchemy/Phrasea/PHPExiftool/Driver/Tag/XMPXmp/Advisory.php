<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\XMPXmp;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class Advisory extends AbstractTag
{

    protected $Id = 'Advisory';

    protected $Name = 'Advisory';

    protected $FullName = 'XMP::xmp';

    protected $GroupName = 'XMP-xmp';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-xmp';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Advisory';

    protected $flag_List = true;

    protected $flag_Bag = true;

}