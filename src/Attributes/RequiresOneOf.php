<?php

namespace Zacksmash\MlbStats\Attributes;

use Attribute;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Zacksmash\MlbStats\Exceptions\InvalidParameterException;

#[Attribute(Attribute::TARGET_CLASS)]
class RequiresOneOf
{
    public Collection $parameters;

    public function __construct(mixed $args)
    {
        $this->parameters = collect(is_array($args) ? $args : func_get_args());
    }

    /**
     * Validate that at least one of the required parameters is provided.
     *
     * @param  object  $instance  The instance to validate
     * @param  \ReflectionClass  $reflection  The reflection class of the instance
     *
     * @throws InvalidParameterException
     */
    public function validate(Collection $request): void
    {
        $validator = Validator::make($request->all(), [
            ...$this->parameters->mapWithKeys(function ($param) {
                return [$param => 'required_without_all:'.$this->parameters->diff([$param])->implode(',')];
            }),
        ]);

        if ($validator->fails()) {
            throw new InvalidParameterException(
                'At least one of the following parameters is required: '.$this->parameters->implode(', ')
            );
        }
    }
}
