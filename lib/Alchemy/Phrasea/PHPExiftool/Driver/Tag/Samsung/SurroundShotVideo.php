<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\Samsung;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class SurroundShotVideo extends AbstractTag
{

    protected $Id = '0x0201';

    protected $Name = 'SurroundShotVideo';

    protected $FullName = 'Samsung::Trailer';

    protected $GroupName = 'Samsung';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Samsung';

    protected $g2 = 'Other';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Surround Shot Video';

    protected $local_g2 = 'Video';

    protected $flag_Binary = true;

    protected $flag_Permanent = true;

}