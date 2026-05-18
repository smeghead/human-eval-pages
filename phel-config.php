<?php

use Phel\Config\PhelConfig;
use Phel\Config\ProjectLayout;

return PhelConfig::forProject(ProjectLayout::Flat)
    ->withMainPhelNamespace('app\main');
