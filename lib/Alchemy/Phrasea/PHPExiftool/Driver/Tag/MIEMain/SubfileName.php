<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\MIEMain;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class SubfileName extends AbstractTag
{

    protected $Id = '1Name';

    protected $Name = 'SubfileName';

    protected $FullName = 'MIE::Main';

    protected $GroupName = 'MIE-Main';

    protected $g0 = 'MIE';

    protected $g1 = 'MIE-Main';

    protected $g2 = 'Other';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Subfile Name';

}