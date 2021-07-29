<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\Track;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class ProductionApertureDimensions extends AbstractTag
{

    protected $Id = 'prof';

    protected $Name = 'ProductionApertureDimensions';

    protected $FullName = 'QuickTime::TrackAperture';

    protected $GroupName = 'Track#';

    protected $g0 = 'QuickTime';

    protected $g1 = 'Track#';

    protected $g2 = 'Video';

    protected $Type = 'fixed32u';

    protected $Writable = false;

    protected $Description = 'Production Aperture Dimensions';

    protected $MaxLength = 3;

}