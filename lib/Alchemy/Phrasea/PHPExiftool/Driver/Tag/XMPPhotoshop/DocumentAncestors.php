<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\XMPPhotoshop;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class DocumentAncestors extends AbstractTag
{

    protected $Id = 'DocumentAncestors';

    protected $Name = 'DocumentAncestors';

    protected $FullName = 'XMP::photoshop';

    protected $GroupName = 'XMP-photoshop';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-photoshop';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Document Ancestors';

    protected $flag_List = true;

    protected $flag_Bag = true;

}