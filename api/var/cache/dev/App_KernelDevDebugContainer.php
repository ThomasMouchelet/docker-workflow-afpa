<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6pAbq2g\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6pAbq2g/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container6pAbq2g.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container6pAbq2g\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container6pAbq2g\App_KernelDevDebugContainer([
    'container.build_hash' => '6pAbq2g',
    'container.build_id' => 'da00f45f',
    'container.build_time' => 1649253919,
], __DIR__.\DIRECTORY_SEPARATOR.'Container6pAbq2g');
