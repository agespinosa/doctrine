<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEiR1SWE\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEiR1SWE/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerEiR1SWE.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerEiR1SWE\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerEiR1SWE\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'EiR1SWE',
    'container.build_id' => '2888d786',
    'container.build_time' => 1585170037,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerEiR1SWE');
