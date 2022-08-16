<?php
class validationutil
{
    static function validate(loginrequest $request)
    {
        if (!isset($request->username)) {
            throw new validationexeception("username is null");
        } else if (!isset($request->password)) {
            throw new validationexeception("password is null");
        } else if (is_null($request->username)) {
            throw new validationexeception("username is null");
        } elseif (is_null($request->password)) {
            throw new validationexeception("password isnull");
        }
    }

    static function validatereflection($request)
    {
        $reflection = new reflectionclass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $property) {
            if (!$property->isInitialized($request)) {
                throw new validationexeception("$property->name is not set");
            } else if (is_null($property->getValue($request))) {
                throw new validationexeception("$property->name is null");
            }
        }
    }
}
