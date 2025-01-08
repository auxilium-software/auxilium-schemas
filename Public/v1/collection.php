<?php

use App\Schemas\CollectionSchema;
use Darksparrow\AuxiliumSchemaBuilder\SchemaBuilder\SchemaBuilder;

require_once __DIR__ . '/../../vendor/autoload.php';

SchemaBuilder::RenderSchema(CollectionSchema::class);
