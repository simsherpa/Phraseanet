<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\MIECamera;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class DigitalZoom extends AbstractTag
{

    protected $Id = 'DigitalZoom';

    protected $Name = 'DigitalZoom';

    protected $FullName = 'MIE::Camera';

    protected $GroupName = 'MIE-Camera';

    protected $g0 = 'MIE';

    protected $g1 = 'MIE-Camera';

    protected $g2 = 'Camera';

    protected $Type = 'rational64u';

    protected $Writable = true;

    protected $Description = 'Digital Zoom';

}