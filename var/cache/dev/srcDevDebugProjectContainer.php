<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1iNxgVx\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1iNxgVx/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container1iNxgVx.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\Container1iNxgVx\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \Container1iNxgVx\srcDevDebugProjectContainer(array(
    'container.build_hash' => '1iNxgVx',
    'container.build_id' => '961510ff',
    'container.build_time' => 1525787541,
), __DIR__.\DIRECTORY_SEPARATOR.'Container1iNxgVx');
