<?php

use App\Schemas\CaseSchema;
use Darksparrow\AuxiliumSchemaBuilder\SchemaBuilder\SchemaBuilder;

require_once __DIR__ . '/../../vendor/autoload.php';

SchemaBuilder::RenderSchema(CaseSchema::class);
