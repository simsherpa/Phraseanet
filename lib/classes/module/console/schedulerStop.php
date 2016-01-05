<?php

/*
 * This file is part of Phraseanet
 *
 * (c) 2005-2016 Alchemy
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 *
 * @package     KonsoleKomander
 * @license     http://opensource.org/licenses/gpl-3.0 GPLv3
 * @link        www.phraseanet.com
 */
use Alchemy\Phrasea\Command\Command;
use Alchemy\Phrasea\Exception\RuntimeException;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class module_console_schedulerStop extends Command
{

    public function __construct($name = null)
    {
        parent::__construct($name);

        $this->setDescription('Stops Phraseanet scheduler');

        return $this;
    }

    protected function doExecute(InputInterface $input, OutputInterface $output)
    {
        if (false === $this->container['phraseanet.configuration']['main']['task-manager']['enabled']) {
            throw new RuntimeException('The use of the task manager is disabled on this instance.');
        }

        try {
            $task_manager = $this->container['task-manager'];
            $task_manager->setSchedulerState(task_manager::STATE_TOSTOP);

            return 0;
        } catch (\Exception $e) {
            return 1;
        }

        return 0;
    }
}
