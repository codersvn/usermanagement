<?php

namespace VCComponent\Laravel\User\Traits;

trait UserValidatorTrait
{
    public function getSchemaRules($repository)
    {
        $schema = collect($repository->model()::schema());
        $rules  = $schema->map(function ($item) {
            return $item['rule'];
        });
        return $rules->toArray();
    }

    public function isSchemaValid($data, $rules)
    {
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            throw new Exception($validator->errors(), 1000);
        }
        return true;
    }
}
