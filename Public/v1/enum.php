<?php

use App\Schemas\EnumSchema;
use Darksparrow\AuxiliumSchemaBuilder\SchemaBuilder\SchemaBuilder;

require_once __DIR__ . '/../../vendor/autoload.php';

SchemaBuilder::RenderSchema(EnumSchema::class);
