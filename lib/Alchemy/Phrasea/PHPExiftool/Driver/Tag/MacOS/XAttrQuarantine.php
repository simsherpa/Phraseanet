<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\MacOS;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class XAttrQuarantine extends AbstractTag
{

    protected $Id = 'com.apple.quarantine';

    protected $Name = 'XAttrQuarantine';

    protected $FullName = 'MacOS::XAttr';

    protected $GroupName = 'MacOS';

    protected $g0 = 'File';

    protected $g1 = 'MacOS';

    protected $g2 = 'Other';

    protected $Type = '?';

    protected $Writable = true;

    protected $Description = 'X Attr Quarantine';

    protected $flag_Unsafe = true;

}