<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\XMPX;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class XMPToolkit extends AbstractTag
{

    protected $Id = 'xmptk';

    protected $Name = 'XMPToolkit';

    protected $FullName = 'XMP::x';

    protected $GroupName = 'XMP-x';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-x';

    protected $g2 = 'Document';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'XMP Toolkit';

    protected $flag_Unsafe = true;

}