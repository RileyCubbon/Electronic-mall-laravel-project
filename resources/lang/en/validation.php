<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'The :attributes must be accepted.',
    'active_url'           => 'The :attributes is not a valid URL.',
    'after'                => 'The :attributes must be a date after :date.',
    'after_or_equal'       => 'The :attributes must be a date after or equal to :date.',
    'alpha'                => 'The :attributes may only contain letters.',
    'alpha_dash'           => 'The :attributes may only contain letters, numbers, and dashes.',
    'alpha_num'            => 'The :attributes may only contain letters and numbers.',
    'array'                => 'The :attributes must be an array.',
    'before'               => 'The :attributes must be a date before :date.',
    'before_or_equal'      => 'The :attributes must be a date before or equal to :date.',
    'between'              => [
        'numeric' => 'The :attributes must be between :min and :max.',
        'file'    => 'The :attributes must be between :min and :max kilobytes.',
        'string'  => 'The :attributes must be between :min and :max characters.',
        'array'   => 'The :attributes must have between :min and :max items.',
    ],
    'boolean'              => 'The :attributes field must be true or false.',
    'confirmed'            => 'The :attributes confirmation does not match.',
    'date'                 => 'The :attributes is not a valid date.',
    'date_format'          => 'The :attributes does not match the format :format.',
    'different'            => 'The :attributes and :other must be different.',
    'digits'               => 'The :attributes must be :digits digits.',
    'digits_between'       => 'The :attributes must be between :min and :max digits.',
    'dimensions'           => 'The :attributes has invalid image dimensions.',
    'distinct'             => 'The :attributes field has a duplicate value.',
    'email'                => 'The :attributes must be a valid email address.',
    'exists'               => 'The selected :attributes is invalid.',
    'file'                 => 'The :attributes must be a file.',
    'filled'               => 'The :attributes field must have a value.',
    'image'                => 'The :attributes must be an image.',
    'in'                   => 'The selected :attributes is invalid.',
    'in_array'             => 'The :attributes field does not exist in :other.',
    'integer'              => 'The :attributes must be an integer.',
    'ip'                   => 'The :attributes must be a valid IP address.',
    'ipv4'                 => 'The :attributes must be a valid IPv4 address.',
    'ipv6'                 => 'The :attributes must be a valid IPv6 address.',
    'json'                 => 'The :attributes must be a valid JSON string.',
    'max'                  => [
        'numeric' => 'The :attributes may not be greater than :max.',
        'file'    => 'The :attributes may not be greater than :max kilobytes.',
        'string'  => 'The :attributes may not be greater than :max characters.',
        'array'   => 'The :attributes may not have more than :max items.',
    ],
    'mimes'                => 'The :attributes must be a file of type: :values.',
    'mimetypes'            => 'The :attributes must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'The :attributes must be at least :min.',
        'file'    => 'The :attributes must be at least :min kilobytes.',
        'string'  => 'The :attributes must be at least :min characters.',
        'array'   => 'The :attributes must have at least :min items.',
    ],
    'not_in'               => 'The selected :attributes is invalid.',
    'numeric'              => 'The :attributes must be a number.',
    'present'              => 'The :attributes field must be present.',
    'regex'                => 'The :attributes format is invalid.',
    'required'             => 'The :attributes field is required.',
    'required_if'          => 'The :attributes field is required when :other is :value.',
    'required_unless'      => 'The :attributes field is required unless :other is in :values.',
    'required_with'        => 'The :attributes field is required when :values is present.',
    'required_with_all'    => 'The :attributes field is required when :values is present.',
    'required_without'     => 'The :attributes field is required when :values is not present.',
    'required_without_all' => 'The :attributes field is required when none of :values are present.',
    'same'                 => 'The :attributes and :other must match.',
    'size'                 => [
        'numeric' => 'The :attributes must be :size.',
        'file'    => 'The :attributes must be :size kilobytes.',
        'string'  => 'The :attributes must be :size characters.',
        'array'   => 'The :attributes must contain :size items.',
    ],
    'string'               => 'The :attributes must be a string.',
    'timezone'             => 'The :attributes must be a valid zone.',
    'unique'               => 'The :attributes has already been taken.',
    'uploaded'             => 'The :attributes failed to upload.',
    'url'                  => 'The :attributes format is invalid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attributes.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attributes rule.
    |
    */

    'custom' => [
        'name'     => [
            'required' => '请填写用户名',
            'string'   => '用户名不能是特殊字符',
        ],
        'password' => [
            'required' => '请填写密码',
            'string'   => '密码不能是特殊字符',
        ],
        'captcha'  => [
            'required' => '请填写验证码',
            'captcha'  => '验证码不正确',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attributes place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
