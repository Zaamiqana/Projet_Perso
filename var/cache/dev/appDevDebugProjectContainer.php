<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2vomuwk\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2vomuwk/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container2vomuwk.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container2vomuwk\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container2vomuwk\appDevDebugProjectContainer(array(
    'container.build_hash' => '2vomuwk',
    'container.build_id' => 'd620d156',
    'container.build_time' => 1539174878,
), __DIR__.\DIRECTORY_SEPARATOR.'Container2vomuwk');
