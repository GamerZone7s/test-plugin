// src/MyPlugin/Main.php
<?php

namespace MyPlugin;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase {
    public function onEnable(): void {
        $this->getLogger()->info("MyPlugin Enabled!");
    }

    public function onDisable(): void {
        $this->getLogger()->info("MyPlugin Disabled!");
    }
}
