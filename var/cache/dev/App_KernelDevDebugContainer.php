<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4c5wqwH\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4c5wqwH/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container4c5wqwH.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container4c5wqwH\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container4c5wqwH\App_KernelDevDebugContainer([
    'container.build_hash' => '4c5wqwH',
    'container.build_id' => '9e2c67aa',
    'container.build_time' => 1727264960,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4c5wqwH');
