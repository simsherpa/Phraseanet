<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\VCalendar;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class MeetingLocations extends AbstractTag
{

    protected $Id = 'X-microsoft-locations';

    protected $Name = 'MeetingLocations';

    protected $FullName = 'VCard::VCalendar';

    protected $GroupName = 'VCalendar';

    protected $g0 = 'VCard';

    protected $g1 = 'VCalendar';

    protected $g2 = 'Document';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Meeting Locations';

    protected $local_g2 = 'Location';

}