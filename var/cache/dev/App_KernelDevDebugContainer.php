<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSxZ7CD6\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSxZ7CD6/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSxZ7CD6.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSxZ7CD6\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSxZ7CD6\App_KernelDevDebugContainer([
    'container.build_hash' => 'SxZ7CD6',
    'container.build_id' => '1c698fff',
    'container.build_time' => 1665052977,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSxZ7CD6');
