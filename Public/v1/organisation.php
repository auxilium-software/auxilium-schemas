<?php

use App\Schemas\OrganisationSchema;
use Darksparrow\AuxiliumSchemaBuilder\SchemaBuilder\SchemaBuilder;

require_once __DIR__ . '/../../vendor/autoload.php';

SchemaBuilder::RenderSchema(OrganisationSchema::class);
