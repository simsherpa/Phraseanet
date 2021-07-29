<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\Red;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class OriginalFrameRate extends AbstractTag
{

    protected $Id = 8294;

    protected $Name = 'OriginalFrameRate';

    protected $FullName = 'Red::Main';

    protected $GroupName = 'Red';

    protected $g0 = 'Red';

    protected $g1 = 'Red';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Original Frame Rate';

    protected $local_g2 = 'Video';

}