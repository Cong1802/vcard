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

    'accepted' => ':attribute phải được chấp nhận.',
    'accepted_if' => ':attribute phải được chấp nhận khi :other là :value.',
    'active_url' => ' :attribute không phải là URL hợp lệ.',
    'after' => ':attribute phải là một ngày sau :date.',
    'after_or_equal' => ' :attribute phải là một ngày sau hoặc bằng :date.',
    'alpha' => ':attribute chỉ được chứa các chữ cái.',
    'alpha_dash' => ':attribute chỉ được chứa chữ cái, số, dấu gạch ngang và dấu gạch dưới.',
    'alpha_num' => ':attribute chỉ được chứa các chữ cái và số.',
    'array' => ' :attribute phải là một mảng.',
    'before' => ' :attribute phải là một ngày trước :date.',
    'before_or_equal' => ' :attribute phải là ngày trước hoặc bằng :date.',
    'between' => [
        'a_rray' => 'The :attribute must have between :min and :max items.',
        'f_ile' => 'The :attribute must be between :min and :max kilobytes.',
        'n_umeric' => 'The :attribute must be between :min and :max.',
        's_tring' => 'The :attribute must be between :min and :max characters.',

        'a_rray' => 'Các mục :attribute phải có từ :min đến :max.',
         'f_ile' => ':attribute phải nằm giữa :min và :max kilobyte.',
         'n_umeric' => ':attribute phải nằm giữa :min và :max.',
         's_tring' => ':attribute phải nằm giữa :min và :max ký tự.',
    ],
    'boolean' => 'Trường :attribute phải đúng hoặc sai.',
    'confirmed' => 'Xác nhận :attribute không khớp.',
    'current_password' => 'Mật khẩu không đúng.',
    'date' => ' :attribute không phải là ngày hợp lệ.',
    'date_equals' => ' :attribute phải là ngày bằng :date.',
    'date_format' => ':attribute không khớp với định dạng :format.',
    'declined' => ':attribute phải bị từ chối.',
    'declined_if' => ':attribute phải bị từ chối khi :other là :value.',
    'diffferent' => ':attribute và :other phải khác nhau.',
    'digits' => ' :attribute phải là :digits chữ số.',
    'digits_between' => 'Số :attribute phải nằm giữa các chữ số :min và :max.',
    'dimensions' => ' :attribute có kích thước hình ảnh không hợp lệ.',
    'distinct' => 'Trường :attribute có giá trị trùng lặp.',
    'doesnt_end_with' => ':attribute có thể không kết thúc bằng một trong những điều sau: :values.',
    'doesnt_start_with' => ' :attribute không được bắt đầu bằng một trong những điều sau: :values.',
    'email' => ' :attribute phải là một địa chỉ email hợp lệ.',
    'ends_with' => ':attribute phải kết thúc bằng một trong những điều sau: :values.',
    'enum' => ' :attribute đã chọn không hợp lệ.',
    'exists' => 'Cái :attribute đã chọn không hợp lệ.',
    'file' => ' :attribute phải là một tập tin.',
    'filled' => 'Trường :attribute phải có giá trị.',
    'gt' => [
        'array' => 'Các mục :attribute phải có nhiều hơn :value.',
        'file' => ' :attribute phải lớn hơn :value kilobyte.',
        'numeric' => ' :attribute phải lớn hơn :value.',
        'string' => 'Ký tự :attribute phải lớn hơn ký tự :value.',
    ],
    'gte' => [
        'array' => 'Các mục :attribute phải có các mục :value trở lên.',
        'file' => ' :attribute phải lớn hơn hoặc bằng :value kilobyte.',
        'numeric' => ' :attribute phải lớn hơn hoặc bằng :value.',
        'string' => 'Ký tự :attribute phải lớn hơn hoặc bằng :value.',
    ],
    'image' => ' :attribute phải là một hình ảnh.',
    'in' => ':attribute đã chọn không hợp lệ.',
    'in_array' => 'Trường :attribute không tồn tại trong :other.',
    'integer' => ' :attribute phải là một số nguyên.',
    'ip' => ' :attribute phải là một địa chỉ IP hợp lệ.',
    'ipv4' => ' :attribute phải là địa chỉ IPv4 hợp lệ.',
    'ipv6' => ' :attribute phải là địa chỉ IPv6 hợp lệ.',
    'json' => ' :attribute phải là một chuỗi JSON hợp lệ.',
    'lt' => [
        'array' => 'Các mục :attribute phải có ít hơn :value.',
        'file' => ':attribute phải nhỏ hơn :value kilobyte.',
        'numeric' => ':attribute phải nhỏ hơn :value.',
        'string' => 'Ký tự :attribute phải nhỏ hơn :value.',
    ],
    'lte' => [
        'array' => 'Các mục :attribute không được có nhiều hơn :v_alue.',
        'file' => ' :attribute phải nhỏ hơn hoặc bằng :v_alue kilobyte.',
        'numeric' => ' :attribute phải nhỏ hơn hoặc bằng :v_alue.',
        'string' => 'Ký tự :attribute phải nhỏ hơn hoặc bằng :v_alue.',
    ],
    'mac_address' => ' :attribute phải là địa chỉ MAC hợp lệ.',
    'max' => [
        'array' => 'Các mục :attribute không được có nhiều hơn :max mục.',
        'file' => ' :attribute không được lớn hơn :max kilobyte.',
        'numeric' => ' :attribute không được lớn hơn :max.',
        'string' => ' :attribute không được lớn hơn :max ký tự.',
    ],
    'max_digits' => ' :attribbut_e không được có nhiều hơn :max chữ số.',
    'mimes' => 'Tệp :attribute phải là kiểu: :values.',
    'mimetypes' => 'Tệp :attribute phải là kiểu: :values.',
    'min' => [
        'array' => 'Các :attribute phải có ít nhất :các mục tối thiểu.',
        'file' => ':attribute ít nhất phải là :min kilobyte.',
        'numeric' => ':attribute ít nhất phải là :min.',
        'string' => ':attribute phải có ít nhất :min ký tự.',
    ],
    'min_digits' => ':attribbut_e phải có ít nhất :chữ số tối thiểu.',
    'multiple_of' => ' :attribute phải là bội số của :v_alue.',
    'not_in' => ':attribute đã chọn không hợp lệ.',
    'not_regex' => 'Định dạng :attribute không hợp lệ.',
    'numeric' => ':attribute phải là một số.',
    'password' => [
        'letters' => ':attribute phải chứa ít nhất một chữ cái.',
        'mixed' => ':attribute phải chứa ít nhất một chữ hoa và một chữ thường.',
        'numbers' => ':attribute phải chứa ít nhất một số.',
        'symbols' => ':attribute phải chứa ít nhất một biểu tượng.',
        'uncompromised' => ':attribute đã cho xuất hiện trong một vụ rò rỉ dữ liệu. Vui lòng chọn một :attribute khác.',
    ],
    'present' => 'Trường :attribute phải có mặt.',
    'prohibited' => 'Trường :attribute bị cấm.',
    'prohibited_if' => 'Trường :attribute bị cấm khi :other là :v_alue.',
    'prohibited_unless' => 'Trường :attribute bị cấm trừ khi :other nằm trong :values.',
    'prohibits' => 'Trường :attribute cấm :other xuất hiện.',
    'regex' => 'Định dạng :attribute không hợp lệ.',
    'required' => 'Trường :attribute là bắt buộc.',
    'required_array_keys' => 'Trường :attribute phải chứa các mục cho: :values.',
    'required_if' => 'Trường :attribute là bắt buộc khi :other là :v_alue.',
    'required_if_accepted' => 'Trường :attribute là bắt buộc khi :other được chấp nhận.',
    'required_unless' => 'Trường :attribute là bắt buộc trừ khi :other nằm trong :values.',
    'required_with' => 'Trường :attribute là bắt buộc khi có :values.',
    'required_with_all' => 'Trường :attribute là bắt buộc khi có :values.',
    'required_without' => 'Trường :attribute là bắt buộc khi không có :values.',
    'required_without_all' => 'Trường :attribute là bắt buộc khi không có :v_alue nào hiện diện.',
    'same' => ':attribute và :other phải khớp.',
    'size' => [
        'array' => 'Các mục :attribute phải chứa các mục :size.',
        'file' => ':attribute phải là :size kilobyte.',
        'numeric' => ':attribute phải là :size.',
        'string' => ':attribute phải là :size ký tự.',
    ],
    'starts_with' => ' :attribute phải bắt đầu bằng một trong những điều sau: :values.',
    'string' => ':attribute phải là một chuỗi.',
    'timezone' => ':attribute phải là múi giờ hợp lệ.',
    'unique' => ':attribute đã được sử dụng.',
    'uploaded' => 'Không thể tải lên :attribute.',
    'url' => ' :attribute phải là một URL hợp lệ.',
    'uuid' => ' :attribute phải là UUID hợp lệ.',

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
