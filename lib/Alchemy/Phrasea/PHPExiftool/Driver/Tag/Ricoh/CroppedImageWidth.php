<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\Ricoh;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class CroppedImageWidth extends AbstractTag
{

    protected $Id = 5635;

    protected $Name = 'CroppedImageWidth';

    protected $FullName = 'Ricoh::Main';

    protected $GroupName = 'Ricoh';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Ricoh';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Cropped Image Width';

    protected $flag_Permanent = true;

}