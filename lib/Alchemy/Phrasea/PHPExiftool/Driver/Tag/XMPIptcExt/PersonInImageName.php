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
class PersonInImageName extends AbstractTag
{

    protected $Id = 'PersonInImageWDetailsPersonName';

    protected $Name = 'PersonInImageName';

    protected $FullName = 'XMP::iptcExt';

    protected $GroupName = 'XMP-iptcExt';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-iptcExt';

    protected $g2 = 'Author';

    protected $Type = 'lang-alt';

    protected $Writable = true;

    protected $Description = 'Person In Image Name';

    protected $flag_List = true;

}