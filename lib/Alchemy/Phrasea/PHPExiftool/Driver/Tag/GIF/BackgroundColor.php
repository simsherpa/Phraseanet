<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\GIF;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class BackgroundColor extends AbstractTag
{

    protected $Id = 5;

    protected $Name = 'BackgroundColor';

    protected $FullName = 'GIF::Screen';

    protected $GroupName = 'GIF';

    protected $g0 = 'GIF';

    protected $g1 = 'GIF';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Background Color';

}