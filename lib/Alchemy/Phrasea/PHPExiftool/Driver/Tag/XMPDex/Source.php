<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\XMPDex;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class Source extends AbstractTag
{

    protected $Id = 'source';

    protected $Name = 'Source';

    protected $FullName = 'XMP::dex';

    protected $GroupName = 'XMP-dex';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-dex';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Source';

    protected $flag_Avoid = true;

}