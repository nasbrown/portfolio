<?php

declare(strict_types=1);

require_once __DIR__ . './../bootstrap.php';

loadSchema(connect(), DB_DIR . '/schema.sql');