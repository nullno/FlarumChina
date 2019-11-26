<?php
/*
 * (c) Sajjad Hashemian <wolaws@gmail.com>
 */

namespace Sijad\Details\Listener;

use Flarum\Event\ConfigureFormatter;
use Illuminate\Contracts\Events\Dispatcher;

class AddBBCode
{
    /**
     * @param Dispatcher $events
     */
    public function subscribe(Dispatcher $events)
    {
        $events->listen(ConfigureFormatter::class, [$this, 'addBBCode']);
    }

    /**
     * @param ConfigureFormatter $event
     */
    public function addBBCode(ConfigureFormatter $event)
    {
        $event->configurator->BBCodes->addCustom(
            '[DETAILS title={TEXT1;optional}]{TEXT2}[/DETAILS]',
            '<details><summary>ccccccccc{TEXT1}</summary><div>{TEXT2}</div></details>'
        );
        //   $event->configurator->BBCodes->addCustom(             
        //     '[video]{URL}[/video]',             
        //     '<video width="100%" controls><source src="{URL}" type="video/mp4">你的浏览器不支持 HTML5 视频，请使用 chrome 浏览器访问。</video>'
        // );
    }
}
