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


    'accepted' => ':attribute трябва да бъде приет.',
    'accepted_if' => ':attribute трябва да бъде приет, когато :other е :value.',
    'active_url' => ':attribute не е валиден URL адрес.',
    'after' => ':attribute трябва да бъде дата след :date.',
    'after_or_equal' => ':attribute трябва да бъде дата след или равна на :date.',
    'alpha' => ':attribute може да съдържа само букви.',
    'alpha_dash' => ':attribute може да съдържа само букви, цифри, тирета и долни черти.',
    'alpha_num' => ':attribute може да съдържа само букви и цифри.',
    'array' => ':attribute трябва да бъде масив.',
    'before' => ':attribute трябва да бъде дата преди :date.',
    'before_or_equal' => ':attribute трябва да бъде дата преди или равна на :date.',
    'between' => [
        'array' => ':attribute трябва да има между :min и :max елемента.',
        'file' => ':attribute трябва да бъде между :min и :max килобайта.',
        'numeric' => ':attribute трябва да бъде между :min и :max.',
        'string' => ':attribute трябва да бъде между :min и :max символа.',
    ],
    'boolean' => ':attribute полето трябва да е истина или лъжа.',
    'confirmed' => ':attribute потвърждението не съвпада.',
    'current_password' => 'Грешна парола.',
    'date' => ':attribute не е валидна дата.',
    'date_equals' => ':attribute трябва да бъде дата, равна на :date.',
    'date_format' => ':attribute не съответства на формата :format.',
    'declined' => ':attribute трябва да бъде отказан.',
    'declined_if' => ':attribute трябва да бъде отказан, когато :other е :value.',
    'different' => ':attribute и :other трябва да са различни.',
    'digits' => ':attribute трябва да има :digits цифри.',
    'digits_between' => ':attribute трябва да има между :min и :max цифри.',
    'dimensions' => ':attribute има невалидни размери на изображението.',
    'distinct' => ':attribute полето има дублираща стойност.',
    'doesnt_start_with' => ':attribute не може да започва с едно от следните: :values.',
    'email' => ':attribute трябва да е валиден имейл адрес.',
    'ends_with' => ':attribute трябва да завършва с едно от следните: :values.',
    'enum' => 'Избраният :attribute е невалиден.',
    'exists' => 'Избраният :attribute е невалиден.',
    'file' => ':attribute трябва да бъде файл.',
    'filled' => ':attribute полето трябва да има стойност.',
    'gt' => [
        'array' => ':attribute трябва да има повече от :value елемента.',
        'file' => ':attribute трябва да бъде по-голям от :value килобайта.',
        'numeric' => ':attribute трябва да бъде по-голямо от :value.',
        'string' => ':attribute трябва да бъде по-дълго от :value знака.',
    ],
    'gte' => [
        'array' => ':attribute трябва да има :value елемента или повече.',
        'file' => ':attribute трябва да бъде по-голямо или равно на :value килобайта.',
        'numeric' => ':attribute трябва да бъде по-голямо или равно на :value.',
        'string' => ':attribute трябва да бъде по-дълго или равно на :value знака.',
    ],
    'image' => ':attribute трябва да бъде изображение.',
    'in' => 'Избраният :attribute е невалиден.',
    'in_array' => ':attribute полето не съществува в :other.',
    'integer' => ':attribute трябва да бъде цяло число.',
    'ip' => ':attribute трябва да бъде валиден IP адрес.',
    'ipv4' => ':attribute трябва да бъде валиден IPv4 адрес.',
    'ipv6' => ':attribute трябва да бъде валиден IPv6 адрес.',
    'json' => ':attribute трябва да бъде валиден JSON низ.',
    'lt' => [
        'array' => ':attribute трябва да има по-малко от :value елемента.',
        'file' => ':attribute трябва да бъде по-малко от :value килобайта.',
        'numeric' => ':attribute трябва да бъде по-малко от :value.',
        'string' => ':attribute трябва да бъде по-късо от :value знака.',
    ],
    'lte' => [
        'array' => ':attribute не трябва да има повече от :value елемента.',
        'file' => ':attribute трябва да бъде по-малко или равно на :value килобайта.',
        'numeric' => ':attribute трябва да бъде по-малко или равно на :value.',
        'string' => ':attribute трябва да бъде по-късо или равно на :value знака.',
    ],

    'mac_address' => ':attribute трябва да е валиден MAC адрес.',
    'max' => [
        'array' => ':attribute не трябва да има повече от :max елемента.',
        'file' => ':attribute не трябва да е по-голям от :max килобайта.',
        'numeric' => ':attribute не трябва да е по-голям от :max.',
        'string' => ':attribute не трябва да е по-дълъг от :max символа.',
    ],
    'mimes' => ':attribute трябва да е файл от тип: :values.',
    'mimetypes' => ':attribute трябва да е файл от тип: :values.',
    'min' => [
        'array' => ':attribute трябва да има поне :min елемента.',
        'file' => ':attribute трябва да е поне :min килобайта.',
        'numeric' => ':attribute трябва да е поне :min.',
        'string' => ':attribute трябва да е поне :min символа.',
    ],
    'multiple_of' => ':attribute трябва да е кратно на :value.',
    'not_in' => 'Избраното :attribute е невалидно.',
    'not_regex' => 'Форматът на :attribute е невалиден.',
    'numeric' => ':attribute трябва да бъде число.',
    'password' => [
        'letters' => ':attribute трябва да съдържа поне една буква.',
        'mixed' => ':attribute трябва да съдържа поне една главна и една малка буква.',
        'numbers' => ':attribute трябва да съдържа поне едно число.',
        'symbols' => ':attribute трябва да съдържа поне един символ.',
        'uncompromised' => 'Посоченият :attribute е бил изтекъл от данни. Моля, изберете различен :attribute.',
    ],
    'present' => ':attribute полето трябва да е налично.',
    'prohibited' => ':attribute полето е забранено.',
    'prohibited_if' => ':attribute полето е забранено, когато :other е :value.',
    'prohibited_unless' => ':attribute полето е забранено, освен ако :other е в :values.',
    'prohibits' => ':attribute полето забранява :other да бъде налично.',
    'regex' => 'Форматът на :attribute е невалиден.',
    'required' => ':attribute полето е задължително.',
    'required_array_keys' => ':attribute полето трябва да съдържа записи за: :values.',
    'required_if' => ':attribute полето е задължително, когато :other е :value.',
    'required_unless' => 'Полето :attribute е задължително, освен ако :other е в :values.',
    'required_with' => 'Полето :attribute е задължително, когато :values е налично.',
    'required_with_all' => 'Полето :attribute е задължително, когато :values са налични.',
    'required_without' => 'Полето :attribute е задължително, когато :values не е налично.',
    'required_without_all' => 'Полето :attribute е задължително, когато нито едно от :values не е налично.',
    'same' => ':attribute и :other трябва да съвпадат.',
    'size' => [
        'array' => ':attribute трябва да съдържа :size елемента.',
        'file' => ':attribute трябва да бъде :size килобайта.',
        'numeric' => ':attribute трябва да бъде :size.',
        'string' => ':attribute трябва да бъде :size знака.',
    ],
    'starts_with' => ':attribute трябва да започва с едно от следните: :values.',
    'string' => ':attribute трябва да бъде низ.',
    'timezone' => ':attribute трябва да бъде валидна времева зона.',
    'unique' => ':attribute вече е заето.',
    'uploaded' => ':attribute не можа да бъде качено.',
    'url' => ':attribute трябва да бъде валиден URL адрес.',
    'uuid' => ':attribute трябва да бъде валиден UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
