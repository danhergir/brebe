<?php

declare(strict_types=1);

return [
    'accepted'             => 'El campo debe ser aceptado.',
    'accepted_if'          => 'El campo debe ser aceptado cuando :other sea :value.',
    'active_url'           => 'El campo debe ser una URL válida.',
    'after'                => 'El campo debe ser una fecha posterior a :date.',
    'after_or_equal'       => 'El campo debe ser una fecha posterior o igual a :date.',
    'alpha'                => 'El campo sólo debe contener letras.',
    'alpha_dash'           => 'El campo sólo debe contener letras, números, guiones y guiones bajos.',
    'alpha_num'            => 'El campo sólo debe contener letras y números.',
    'array'                => 'El campo debe ser un conjunto.',
    'ascii'                => 'El campo solo debe contener caracteres alfanuméricos y símbolos de un solo byte.',
    'before'               => 'El campo debe ser una fecha anterior a :date.',
    'before_or_equal'      => 'El campo debe ser una fecha anterior o igual a :date.',
    'between'              => [
        'array'   => 'El campo tiene que tener entre :min - :max elementos.',
        'file'    => 'El campo debe pesar entre :min - :max kilobytes.',
        'numeric' => 'El campo tiene que estar entre :min - :max.',
        'string'  => 'El campo tiene que tener entre :min - :max caracteres.',
    ],
    'boolean'              => 'El campo debe tener un valor verdadero o falso.',
    'can'                  => 'El campo contiene un valor no autorizado.',
    'confirmed'            => 'La confirmación de no coincide.',
    'contains'             => 'The field is missing a required value.',
    'current_password'     => 'La contraseña es incorrecta.',
    'date'                 => 'El campo debe ser una fecha válida.',
    'date_equals'          => 'El campo debe ser una fecha igual a :date.',
    'date_format'          => 'El campo debe coincidir con el formato :format.',
    'decimal'              => 'El campo debe tener :decimal cifras decimales.',
    'declined'             => 'El campo debe ser rechazado.',
    'declined_if'          => 'El campo debe ser rechazado cuando :other sea :value.',
    'different'            => 'El campo y :other deben ser diferentes.',
    'digits'               => 'El campo debe tener :digits dígitos.',
    'digits_between'       => 'El campo debe tener entre :min y :max dígitos.',
    'dimensions'           => 'El campo tiene dimensiones de imagen no válidas.',
    'distinct'             => 'El campo contiene un valor duplicado.',
    'doesnt_end_with'      => 'El campo no debe finalizar con uno de los siguientes: :values.',
    'doesnt_start_with'    => 'El campo no debe comenzar con uno de los siguientes: :values.',
    'email'                => 'El campo no es un correo válido.',
    'ends_with'            => 'El campo debe finalizar con uno de los siguientes valores: :values',
    'enum'                 => 'El campo no está en la lista de valores permitidos.',
    'exists'               => 'El campo no existe.',
    'extensions'           => 'El campo debe tener una de las siguientes extensiones: :values.',
    'file'                 => 'El campo debe ser un archivo.',
    'filled'               => 'El campo es obligatorio.',
    'gt'                   => [
        'array'   => 'El campo debe tener más de :value elementos.',
        'file'    => 'El campo debe tener más de :value kilobytes.',
        'numeric' => 'El campo debe ser mayor que :value.',
        'string'  => 'El campo debe tener más de :value caracteres.',
    ],
    'gte'                  => [
        'array'   => 'El campo debe tener como mínimo :value elementos.',
        'file'    => 'El campo debe tener como mínimo :value kilobytes.',
        'numeric' => 'El campo debe ser como mínimo :value.',
        'string'  => 'El campo debe tener como mínimo :value caracteres.',
    ],
    'hex_color'            => 'El campo debe tener un color hexadecimal válido.',
    'image'                => 'El campo debe ser una imagen.',
    'in'                   => 'El campo no está en la lista de valores permitidos.',
    'in_array'             => 'El campo debe existir en :other.',
    'integer'              => 'El campo debe ser un número entero.',
    'ip'                   => 'El campo debe ser una dirección IP válida.',
    'ipv4'                 => 'El campo debe ser una dirección IPv4 válida.',
    'ipv6'                 => 'El campo debe ser una dirección IPv6 válida.',
    'json'                 => 'El campo debe ser una cadena JSON válida.',
    'list'                 => 'El campo debe ser una lista.',
    'lowercase'            => 'El campo debe estar en minúscula.',
    'lt'                   => [
        'array'   => 'El campo debe tener menos de :value elementos.',
        'file'    => 'El campo debe tener menos de :value kilobytes.',
        'numeric' => 'El campo debe ser menor que :value.',
        'string'  => 'El campo debe tener menos de :value caracteres.',
    ],
    'lte'                  => [
        'array'   => 'El campo debe tener como máximo :value elementos.',
        'file'    => 'El campo debe tener como máximo :value kilobytes.',
        'numeric' => 'El campo debe ser como máximo :value.',
        'string'  => 'El campo debe tener como máximo :value caracteres.',
    ],
    'mac_address'          => 'El campo debe ser una dirección MAC válida.',
    'max'                  => [
        'array'   => 'El campo no debe tener más de :max elementos.',
        'file'    => 'El campo no debe ser mayor que :max kilobytes.',
        'numeric' => 'El campo no debe ser mayor que :max.',
        'string'  => 'El campo no debe ser mayor que :max caracteres.',
    ],
    'max_digits'           => 'El campo no debe tener más de :max dígitos.',
    'mimes'                => 'El campo debe ser un archivo con formato: :values.',
    'mimetypes'            => 'El campo debe ser un archivo con formato: :values.',
    'min'                  => [
        'array'   => 'El campo debe tener al menos :min elementos.',
        'file'    => 'El tamaño de debe ser de al menos :min kilobytes.',
        'numeric' => 'El tamaño de debe ser de al menos :min.',
        'string'  => 'El campo debe contener al menos :min caracteres.',
    ],
    'min_digits'           => 'El campo debe tener al menos :min dígitos.',
    'missing'              => 'El campo no debe estar presente.',
    'missing_if'           => 'El campo no debe estar presente cuando :other sea :value.',
    'missing_unless'       => 'El campo no debe estar presente a menos que :other sea :value.',
    'missing_with'         => 'El campo no debe estar presente si alguno de los campos :values está presente.',
    'missing_with_all'     => 'El campo no debe estar presente cuando los campos :values estén presentes.',
    'multiple_of'          => 'El campo debe ser múltiplo de :value',
    'not_in'               => 'El campo no debe estar en la lista.',
    'not_regex'            => 'El formato del campo no es válido.',
    'numeric'              => 'El campo debe ser numérico.',
    'password'             => [
        'letters'       => 'La debe contener al menos una letra.',
        'mixed'         => 'La debe contener al menos una letra mayúscula y una minúscula.',
        'numbers'       => 'La debe contener al menos un número.',
        'symbols'       => 'La debe contener al menos un símbolo.',
        'uncompromised' => 'La proporcionada se ha visto comprometida en una filtración de datos (data leak). Elija una diferente.',
    ],
    'present'              => 'El campo debe estar presente.',
    'present_if'           => 'El campo debe estar presente cuando :other es :value.',
    'present_unless'       => 'El campo debe estar presente a menos que :other sea :value.',
    'present_with'         => 'El campo debe estar presente cuando :values esté presente.',
    'present_with_all'     => 'El campo debe estar presente cuando :values estén presentes.',
    'prohibited'           => 'El campo está prohibido.',
    'prohibited_if'        => 'El campo está prohibido cuando :other es :value.',
    'prohibited_unless'    => 'El campo está prohibido a menos que :other sea :values.',
    'prohibits'            => 'El campo prohibe que :other esté presente.',
    'regex'                => 'El formato del campo no es válido.',
    'required'             => 'El campo es obligatorio.',
    'required_array_keys'  => 'El campo debe contener entradas para: :values.',
    'required_if'          => 'El campo es obligatorio cuando :other es :value.',
    'required_if_accepted' => 'El campo es obligatorio si :other es aceptado.',
    'required_if_declined' => 'The field is required when :other is declined.',
    'required_unless'      => 'El campo es obligatorio a menos que :other esté en :values.',
    'required_with'        => 'El campo es obligatorio cuando :values está presente.',
    'required_with_all'    => 'El campo es obligatorio cuando :values están presentes.',
    'required_without'     => 'El campo es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El campo es obligatorio cuando ninguno de :values está presente.',
    'same'                 => 'Los campos y :other deben coincidir.',
    'size'                 => [
        'array'   => 'El campo debe contener :size elementos.',
        'file'    => 'El tamaño de debe ser :size kilobytes.',
        'numeric' => 'El tamaño de debe ser :size.',
        'string'  => 'El campo debe contener :size caracteres.',
    ],
    'starts_with'          => 'El campo debe comenzar con uno de los siguientes valores: :values',
    'string'               => 'El campo debe ser una cadena de caracteres.',
    'timezone'             => 'El campo debe ser una zona horaria válida.',
    'ulid'                 => 'El campo debe ser un ULID válido.',
    'unique'               => 'El campo ya ha sido registrado.',
    'uploaded'             => 'Subir ha fallado.',
    'uppercase'            => 'El campo debe estar en mayúscula.',
    'url'                  => 'El campo debe ser una URL válida.',
    'uuid'                 => 'El campo debe ser un UUID válido.',
];