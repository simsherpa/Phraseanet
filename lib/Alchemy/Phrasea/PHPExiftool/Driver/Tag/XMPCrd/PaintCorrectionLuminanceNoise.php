<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\XMPCrd;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class PaintCorrectionLuminanceNoise extends AbstractTag
{

    protected $Id = 'PaintBasedCorrectionsLocalLuminanceNoise';

    protected $Name = 'PaintCorrectionLuminanceNoise';

    protected $FullName = 'XMP::crd';

    protected $GroupName = 'XMP-crd';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-crd';

    protected $g2 = 'Image';

    protected $Type = 'real';

    protected $Writable = true;

    protected $Description = 'Paint Correction Luminance Noise';

    protected $flag_Avoid = true;

}