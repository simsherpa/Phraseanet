<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\Microsoft;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class Creator extends AbstractTag
{

    protected $Id = '{D0A04F0A-462A-48A4-BB2F-3706E88DBD7D} 100';

    protected $Name = 'Creator';

    protected $FullName = 'Microsoft::Xtra';

    protected $GroupName = 'Microsoft';

    protected $g0 = 'QuickTime';

    protected $g1 = 'Microsoft';

    protected $g2 = 'Video';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Creator';

    protected $local_g2 = 'Author';

}