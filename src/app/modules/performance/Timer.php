<?php
/**
 * The Timer class used in ther Performance Module to display the execution time and
 * memory usage
 *
 * PHP version 7.0.0
 *
 * @category Performance
 * @package  Module/Performance
 * @author   Jaime Rodriguez <hi.i.am.jaime@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @version  GIT: 1.0.0
 * @link     http://sleepymustache.com
 */

namespace Module\Performance;

use Sleepy\Core\Hook;
use Sleepy\Core\Module;

/**
 * Timer Module
 *
 * @category Performance
 * @package  Module/Performance
 * @author   Jaime Rodriguez <hi.i.am.jaime@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     http://sleepymustache.com
 */
class Timer extends Module
{
    /**
     * Define the hook points
     */
    public $hooks = [
        'sleepy_preprocess'  => 'startTimer',
        'sleepy_postprocess' => 'stopTimer'
    ];

    public function __construct() {
        $this->environments['dev']   = true;
        $this->environments['stage'] = false;
        $this->environments['live']  = false;

        parent::__construct();
    }

    /**
     * Starts the timer when the framework loads.
     *
     * @return void
     */
    public function startTimer()
    {
        $this->startTime =  microtime(true);
    }

    /**
     * When everything is done, append the time and memory usage to the file
     *
     * @return void
     */
    public function stopTimer()
    {
        $this->stopTimer = microtime(true) - $this->startTime;
        echo "\n<!-- Generated in $this->stopTimer seconds using " .
            (memory_get_peak_usage() / 1024) .
            " kb memory, by sleepyMUSTACHE -->";
    } 
}

Hook::register(new Timer());
