<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerScL5SmK\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerScL5SmK/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerScL5SmK.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerScL5SmK\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerScL5SmK\App_KernelDevDebugContainer([
    'container.build_hash' => 'ScL5SmK',
    'container.build_id' => 'ecccee08',
    'container.build_time' => 1662195412,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerScL5SmK');
