<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\RealCONT;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class Title extends AbstractTag
{

    protected $Id = 1;

    protected $Name = 'Title';

    protected $FullName = 'Real::ContentDescr';

    protected $GroupName = 'Real-CONT';

    protected $g0 = 'Real';

    protected $g1 = 'Real-CONT';

    protected $g2 = 'Video';

    protected $Type = 'string';

    protected $Writable = false;

    protected $Description = 'Title';

}