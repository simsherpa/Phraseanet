<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\Palm;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class CreateDate extends AbstractTag
{

    protected $Id = 9;

    protected $Name = 'CreateDate';

    protected $FullName = 'Palm::Main';

    protected $GroupName = 'Palm';

    protected $g0 = 'Palm';

    protected $g1 = 'Palm';

    protected $g2 = 'Document';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'Create Date';

    protected $local_g2 = 'Time';

}