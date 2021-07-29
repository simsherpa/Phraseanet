<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\SubIFD;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class DistortionCorrParams extends AbstractTag
{

    protected $Id = 28727;

    protected $Name = 'DistortionCorrParams';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'SubIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Distortion Corr Params';

    protected $local_g1 = 'SubIFD';

    protected $flag_Unsafe = true;

    protected $MaxLength = 17;

}