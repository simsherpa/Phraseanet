<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\MakerNotes;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImage extends AbstractTag
{

    protected $Id = 28;

    protected $Name = 'PreviewImage';

    protected $FullName = 'QuickTime::Flip';

    protected $GroupName = 'MakerNotes';

    protected $g0 = 'QuickTime';

    protected $g1 = 'MakerNotes';

    protected $g2 = 'Image';

    protected $Type = 'undef';

    protected $Writable = false;

    protected $Description = 'Preview Image';

    protected $local_g2 = 'Preview';

}