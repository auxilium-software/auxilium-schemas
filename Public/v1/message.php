<?php

use App\Schemas\MessageSchema;
use Darksparrow\AuxiliumSchemaBuilder\SchemaBuilder\SchemaBuilder;

require_once __DIR__ . '/../../vendor/autoload.php';

SchemaBuilder::RenderSchema(MessageSchema::class);
