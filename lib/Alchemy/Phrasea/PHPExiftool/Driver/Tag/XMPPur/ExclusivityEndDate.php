<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\XMPPur;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class ExclusivityEndDate extends AbstractTag
{

    protected $Id = 'exclusivityEndDate';

    protected $Name = 'ExclusivityEndDate';

    protected $FullName = 'XMP::pur';

    protected $GroupName = 'XMP-pur';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-pur';

    protected $g2 = 'Document';

    protected $Type = 'date';

    protected $Writable = true;

    protected $Description = 'Exclusivity End Date';

    protected $local_g2 = 'Time';

    protected $flag_Avoid = true;

    protected $flag_List = true;

    protected $flag_Bag = true;

}