#!/usr/bin/env php
<?php

include_once 'common.php';

// Remove memory limit on PHP 5
if (isPhp5()) {
    run(sprintf('echo "memory_limit=-1" >> ~/.phpenv/versions/%s/etc/conf.d/travis.ini;', getPhpVersion()));
}

// Disable XDebug for non-experimental PHP environments
if (isNonExperimentalPhp()) {
    run('phpenv config-rm xdebug.ini');
}

if (shouldBuildDocs()) {
  //  run('sudo apt-get -qq update');
}