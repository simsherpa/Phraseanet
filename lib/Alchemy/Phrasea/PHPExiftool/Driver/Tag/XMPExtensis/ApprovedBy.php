<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\XMPExtensis;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class ApprovedBy extends AbstractTag
{

    protected $Id = 'ApprovedBy';

    protected $Name = 'ApprovedBy';

    protected $FullName = 'XMP::extensis';

    protected $GroupName = 'XMP-extensis';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-extensis';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Approved By';

}