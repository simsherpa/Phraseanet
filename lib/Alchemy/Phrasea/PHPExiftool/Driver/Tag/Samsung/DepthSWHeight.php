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
class DepthSWHeight extends AbstractTag
{

    protected $Id = 'depthSWHeight';

    protected $Name = 'DepthSWHeight';

    protected $FullName = 'Samsung::SingleShotMeta';

    protected $GroupName = 'Samsung';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Samsung';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Depth SW Height';

    protected $flag_Permanent = true;

}