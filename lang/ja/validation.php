<?php

return [
    'accepted'             => ':attributeを承認してください。',
    'active_url'           => ':attributeは、有効なURLではありません。',
    'after'                => ':attributeには、:dateより後の日付を指定してください。',
    'after_or_equal'       => ':attributeには、:date以降の日付を指定してください。',
    'alpha'                => ':attributeには、アルファベッドのみ使用できます。',
    'alpha_dash'           => ':attributeには、英数字(\'A-Z\',\'a-z\',\'0-9\')とハイフンと下線(\'-\',\'_\')が使用できます。',
    'alpha_num'            => ':attributeには、英数字(\'A-Z\',\'a-z\',\'0-9\')が使用できます。',
    'array'                => ':attributeには、配列を指定してください。',
    'attached'             => 'This :attribute is already attached.',
    'before'               => ':attributeには、:dateより前の日付を指定してください。',
    'before_or_equal'      => ':attributeには、:date以前の日付を指定してください。',
    'between'              => [
        'array'   => ':attributeの項目は、:min個～:max個にしてください。',
        'file'    => ':attributeには、:min KB～:max KBまでのサイズのファイルを指定してください。',
        'numeric' => ':attributeには、:min～:maxまでの数字を指定してください。',
        'string'  => ':attributeは、:min文字～:max文字にしてください。',
    ],
    'boolean'              => ':attributeには、\'true\'か\'false\'を指定してください。',
    'confirmed'            => ':attributeと:attribute確認が一致しません。',
    'date'                 => ':attributeは、正しい日付ではありません。',
    'date_equals'          => ':attributeは:dateに等しい日付でなければなりません。',
    'date_format'          => ':attributeの形式は、\':format\'と合いません。',
    'different'            => ':attributeと:otherには、異なるものを指定してください。',
    'digits'               => ':attributeは、:digits桁にしてください。',
    'digits_between'       => ':attributeは、:min桁～:max桁にしてください。',
    'dimensions'           => ':attributeの画像サイズが無効です',
    'distinct'             => ':attributeの値が重複しています。',
    'email'                => ':attributeは、有効なメールアドレス形式で指定してください。',
    'ends_with'            => ':attributeは、次のうちのいずれかで終わらなければなりません。: :values',
    'exists'               => '選択された:attributeは、有効ではありません。',
    'file'                 => ':attributeはファイルでなければいけません。',
    'filled'               => ':attributeは必須です。',
    'gt'                   => [
        'array'   => ':attributeの項目数は、:value個より大きくなければなりません。',
        'file'    => ':attributeは、:value KBより大きくなければなりません。',
        'numeric' => ':attributeは、:valueより大きくなければなりません。',
        'string'  => ':attributeは、:value文字より大きくなければなりません。',
    ],
    'gte'                  => [
        'array'   => ':attributeの項目数は、:value個以上でなければなりません。',
        'file'    => ':attributeは、:value KB以上でなければなりません。',
        'numeric' => ':attributeは、:value以上でなければなりません。',
        'string'  => ':attributeは、:value文字以上でなければなりません。',
    ],
    'image'                => ':attributeには、画像を指定してください。',
    'in'                   => '選択された:attributeは、有効ではありません。',
    'in_array'             => ':attributeが:otherに存在しません。',
    'integer'              => ':attributeには、整数を指定してください。',
    'ip'                   => ':attributeには、有効なIPアドレスを指定してください。',
    'ipv4'                 => ':attributeはIPv4アドレスを指定してください。',
    'ipv6'                 => ':attributeはIPv6アドレスを指定してください。',
    'json'                 => ':attributeには、有効なJSON文字列を指定してください。',
    'lt'                   => [
        'array'   => ':attributeの項目数は、:value個より小さくなければなりません。',
        'file'    => ':attributeは、:value KBより小さくなければなりません。',
        'numeric' => ':attributeは、:valueより小さくなければなりません。',
        'string'  => ':attributeは、:value文字より小さくなければなりません。',
    ],
    'lte'                  => [
        'array'   => ':attributeの項目数は、:value個以下でなければなりません。',
        'file'    => ':attributeは、:value KB以下でなければなりません。',
        'numeric' => ':attributeは、:value以下でなければなりません。',
        'string'  => ':attributeは、:value文字以下でなければなりません。',
    ],
    'max'                  => [
        'array'   => ':attributeの項目は、:max個以下にしてください。',
        'file'    => ':attributeには、:max KB以下のファイルを指定してください。',
        'numeric' => ':attributeには、:max以下の数字を指定してください。',
        'string'  => ':attributeは、:max文字以下にしてください。',
    ],
    'mimes'                => ':attributeには、:valuesタイプのファイルを指定してください。',
    'mimetypes'            => ':attributeには、:valuesタイプのファイルを指定してください。',
    'min'                  => [
        'array'   => ':attributeの項目は、:min個以上にしてください。',
        'file'    => ':attributeには、:min KB以上のファイルを指定してください。',
        'numeric' => ':attributeには、:min以上の数字を指定してください。',
        'string'  => ':attributeは、:min文字以上にしてください。',
    ],
    'multiple_of'          => 'The :attribute must be a multiple of :value',
    'not_in'               => '選択された:attributeは、有効ではありません。',
    'not_regex'            => ':attributeの形式が無効です。',
    'numeric'              => ':attributeには、数字を指定してください。',
    'password'             => 'パスワードが正しくありません。',
    'present'              => ':attributeが存在している必要があります。',
    'prohibited'           => 'The :attribute field is prohibited.',
    'prohibited_if'        => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless'    => 'The :attribute field is prohibited unless :other is in :values.',
    'regex'                => ':attributeには、有効な正規表現を指定してください。',
    'relatable'            => 'This :attribute may not be associated with this resource.',
    'required'             => ':attributeは、必ず指定してください。',
    'required_if'          => ':otherが:valueの場合、:attributeを指定してください。',
    'required_unless'      => ':otherが:values以外の場合、:attributeを指定してください。',
    'required_with'        => ':valuesが指定されている場合、:attributeも指定してください。',
    'required_with_all'    => ':valuesが全て指定されている場合、:attributeも指定してください。',
    'required_without'     => ':valuesが指定されていない場合、:attributeを指定してください。',
    'required_without_all' => ':valuesが全て指定されていない場合、:attributeを指定してください。',
    'same'                 => ':attributeと:otherが一致しません。',
    'size'                 => [
        'array'   => ':attributeの項目は、:size個にしてください。',
        'file'    => ':attributeには、:size KBのファイルを指定してください。',
        'numeric' => ':attributeには、:sizeを指定してください。',
        'string'  => ':attributeは、:size文字にしてください。',
    ],
    'starts_with'          => ':attributeは、次のいずれかで始まる必要があります。:values',
    'string'               => ':attributeには、文字を指定してください。',
    'timezone'             => ':attributeには、有効なタイムゾーンを指定してください。',
    'unique'               => '指定の:attributeは既に使用されています。',
    'uploaded'             => ':attributeのアップロードに失敗しました。',
    'url'                  => ':attributeは、有効なURL形式で指定してください。',
    'uuid'                 => ':attributeは、有効なUUIDでなければなりません。',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'attributes'           => [
        'title' => '件名',
        'content' => '本文'
    ],
];