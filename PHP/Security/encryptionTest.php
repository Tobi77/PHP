<?php



$ciperList = openssl_get_cipher_methods();



foreach ($ciperList as $ciper) {
    $method = $ciper;

    $string = 'Jjgf4avoQh3cARiyaxuBNmgxY0yjBLDECt2IhLYDRZoOppUFmGdxvZBcvfpa5e0IUpgczDAhZLD2PcbnWJCnoozmMb/W4SjmCc1vMPmCuUULLRDDQbSLjGn3';
    $string = 'mpjVL8feRcYQVOzI9jQIXkb8LHJjvWYbWaPH/0kd5L4mp0thpl+Y4g9FfPpuSpFnPEQgd78lhHsH/kPNss3r8o344sEsml0ZgCEx4Ld0Zpm6MujRe2djjbbX';
    $pwd = '7875fa67e94907420ce71abcc89a15bd';

    var_dump($string);
    $string = base64_decode($string);
    var_dump($string);

    $ivSize = openssl_cipher_iv_length($method);
    $iv = substr($string, 0, $ivSize);

    var_dump($ivSize);
    var_dump($iv);

    var_dump(substr($string, $ivSize));

    $data = openssl_decrypt(
        substr($string, $ivSize),
        $method,
        $pwd,
        OPENSSL_NO_PADDING,
        $iv
    );

    var_dump($data);
    var_dump($method);
    echo '<hr />';
}
