<?php

$id = str_replace([".md", "'"], "",  $argv[1]);
$title = $id;

$header = <<<TEXT
---
id: terms/{$id}
title: {$title}
description: {$title}
---

TEXT;

file_put_contents( $argv[1], $header . file_get_contents($argv[1]));