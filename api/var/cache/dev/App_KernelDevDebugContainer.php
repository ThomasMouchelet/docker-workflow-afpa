<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIO3MOwR\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIO3MOwR/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIO3MOwR.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIO3MOwR\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerIO3MOwR\App_KernelDevDebugContainer([
    'container.build_hash' => 'IO3MOwR',
    'container.build_id' => 'cd4a74e9',
    'container.build_time' => 1649253653,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIO3MOwR');
