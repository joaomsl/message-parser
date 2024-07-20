<?php

declare(strict_types=1);

namespace MessageParserVirionTest;

use LuckyCode\MessageParser\MessageParser;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

    protected function onEnable(): void
    {
        $this->getLogger()->info(MessageParser::foo());
    }

}