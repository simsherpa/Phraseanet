<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\FujiIFD;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class WBGRBLevelsAuto extends AbstractTag
{

    protected $Id = 61453;

    protected $Name = 'WB_GRBLevelsAuto';

    protected $FullName = 'FujiFilm::IFD';

    protected $GroupName = 'FujiIFD';

    protected $g0 = 'RAF';

    protected $g1 = 'FujiIFD';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'WB GRB Levels Auto';

}