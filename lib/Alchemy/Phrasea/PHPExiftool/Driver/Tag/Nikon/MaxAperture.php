<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\Nikon;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class MaxAperture extends AbstractTag
{

    protected $Id = 54;

    protected $Name = 'MaxAperture';

    protected $FullName = 'Nikon::LensData0800';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Max Aperture';

    protected $flag_Permanent = true;

}