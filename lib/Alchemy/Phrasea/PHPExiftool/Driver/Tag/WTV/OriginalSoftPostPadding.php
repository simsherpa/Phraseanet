<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\PHPExiftool\Driver\Tag\WTV;

use Alchemy\Phrasea\PHPExiftool\Driver\AbstractTag;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * @ExclusionPolicy("all")
 */
class OriginalSoftPostPadding extends AbstractTag
{

    protected $Id = 'WM/WMRVOriginalSoftPostPadding';

    protected $Name = 'OriginalSoftPostPadding';

    protected $FullName = 'WTV::Metadata';

    protected $GroupName = 'WTV';

    protected $g0 = 'WTV';

    protected $g1 = 'WTV';

    protected $g2 = 'Video';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Original Soft Post Padding';

}