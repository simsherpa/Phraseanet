<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\Sony;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class CustomWBRBLevels extends AbstractTag
{

    protected $Id = 26;

    protected $Name = 'CustomWB_RBLevels';

    protected $FullName = 'Sony::MoreSettings';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int16uRev';

    protected $Writable = true;

    protected $Description = 'Custom WB RB Levels';

    protected $flag_Permanent = true;

    protected $MaxLength = 2;

}