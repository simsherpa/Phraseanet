<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\MOBI;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class RetailPriceCurrency extends AbstractTag
{

    protected $Id = 119;

    protected $Name = 'RetailPriceCurrency';

    protected $FullName = 'Palm::EXTH';

    protected $GroupName = 'MOBI';

    protected $g0 = 'Palm';

    protected $g1 = 'MOBI';

    protected $g2 = 'Document';

    protected $Type = 'string';

    protected $Writable = false;

    protected $Description = 'Retail Price Currency';

}