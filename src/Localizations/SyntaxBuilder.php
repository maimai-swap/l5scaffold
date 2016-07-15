<?php

namespace Laralib\L5scaffold\Localizations;

/**
 * Class SyntaxBuilder
 * @package Laralib\L5scaffold\Migrations
 * @author Ryan Gurnick <ryangurnick@gmail.com>
 */
class SyntaxBuilder
{

    /**
     * Create the PHP syntax for the given schema.
     *
     * @param  array $schema
     * @param  array $meta
     * @param  string $type
     * @param  bool $illuminate
     * @return string
     * @throws GeneratorException
     * @throws \Exception
     */
    public function create($schema)
    {
        $fieldsc = $this->createSchemaForLocalization($schema);
        return $fieldsc;
    }

    private function createSchemaForLocalization($schema)
    {
        $localization = '';
        foreach($schema as $k => $v){
            $localization .= "'".$v['name']."' => '".$v['argument']."',\n\t";
        }
        return $localization;
    }
}