<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\XMPDwc;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class DCVerbatimSRS extends AbstractTag
{

    protected $Id = 'dctermsLocationVerbatimSRS';

    protected $Name = 'DCVerbatimSRS';

    protected $FullName = 'DarwinCore::Main';

    protected $GroupName = 'XMP-dwc';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-dwc';

    protected $g2 = 'Other';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'DC Verbatim SRS';

    protected $local_g2 = 'Location';

}