<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\Olympus;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class Index12 extends AbstractTag
{

    protected $Id = 632;

    protected $Name = 'Index12';

    protected $FullName = 'Olympus::WAV';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Audio';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'Index 12';

    protected $flag_Permanent = true;

}