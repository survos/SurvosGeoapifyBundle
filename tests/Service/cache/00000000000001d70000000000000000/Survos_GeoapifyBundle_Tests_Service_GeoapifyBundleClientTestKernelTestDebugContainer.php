<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOgiAel5\Survos_GeoapifyBundle_Tests_Service_GeoapifyBundleClientTestKernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOgiAel5/Survos_GeoapifyBundle_Tests_Service_GeoapifyBundleClientTestKernelTestDebugContainer.php') {
    touch(__DIR__.'/ContainerOgiAel5.legacy');

    return;
}

if (!\class_exists(Survos_GeoapifyBundle_Tests_Service_GeoapifyBundleClientTestKernelTestDebugContainer::class, false)) {
    \class_alias(\ContainerOgiAel5\Survos_GeoapifyBundle_Tests_Service_GeoapifyBundleClientTestKernelTestDebugContainer::class, Survos_GeoapifyBundle_Tests_Service_GeoapifyBundleClientTestKernelTestDebugContainer::class, false);
}

return new \ContainerOgiAel5\Survos_GeoapifyBundle_Tests_Service_GeoapifyBundleClientTestKernelTestDebugContainer([
    'container.build_hash' => 'OgiAel5',
    'container.build_id' => '1aff1642',
    'container.build_time' => 1732143563,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOgiAel5');
