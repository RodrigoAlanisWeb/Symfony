<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2nW5Uyk\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2nW5Uyk/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container2nW5Uyk.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container2nW5Uyk\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container2nW5Uyk\App_KernelDevDebugContainer([
    'container.build_hash' => '2nW5Uyk',
    'container.build_id' => 'eea6aeae',
    'container.build_time' => 1610777559,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2nW5Uyk');
