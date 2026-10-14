<?php
declare(strict_types=1);

return [
    'brand' => [
        'name'            => 'WILVA CAPITAL',
        'sub'             => 'FINANZAS SIN FRONTERAS',
        'badge'           => 'TU DINERO, SIN FRONTERAS',
        'headline_part1'  => 'Transferencias',
        'headline_part2'  => 'Internacionales',
        'pillars'         => 'RÁPIDAS  |  SEGURAS  |  CONFIABLES',
        'desc_p1'         => 'Compramos <strong>USDT</strong> al mejor tipo de cambio y realizamos transferencias <strong>SWIFT</strong> a todo el mundo.',
        'desc_p2'         => 'Desde Bolivia hacia cualquier país, con acompañamiento durante todo el proceso.',
        'comision'        => 0.02,  // 2% comisión base estándar
        'rate_adjustment' => 0.02,  // +0.02 Bs. por liquidez P2P
        'swift_fee_usd'   => 80.00  // Certificado SWIFT estándar en USD
    ],
    // Códigos preferenciales extraídos de COMISIONESWILVA.xlsx
    'preferential_codes' => [
        'A5831047'    => ['comision' => 0.016, 'swift' => 60.0,  'label' => 'Cliente Preferencial A5831047'],
        'B7294618'    => ['comision' => 0.015, 'swift' => 60.0,  'label' => 'Cliente Preferencial B7294618'],
        'ALIBABA'     => ['comision' => 0.015, 'swift' => 0.0,   'label' => 'Cuenta Especial Alibaba (SWIFT Gratis)'],
        'PROMOCION01' => ['comision' => 0.011, 'swift' => 45.0,  'label' => 'Promoción Especial 01'],
        'PROMALIBABA' => ['comision' => 0.011, 'swift' => 0.0,   'label' => 'Promoción Alibaba (SWIFT Gratis)'],
        'F4397286'    => ['comision' => 0.019, 'swift' => 80.0,  'label' => 'Cliente Preferencial F4397286'],
        'CLIENTER'    => ['comision' => 0.025, 'swift' => 80.0,  'label' => 'Cuenta Rango CLIENTER'],
        'CLIENTER2'   => ['comision' => 0.030, 'swift' => 120.0, 'label' => 'Cuenta Rango CLIENTER2'],
        'CLIENTER3'   => ['comision' => 0.035, 'swift' => 120.0, 'label' => 'Cuenta Rango CLIENTER3'],
        'WILVA001'    => ['comision' => 0.019, 'swift' => 70.0,  'label' => 'Socio Comercial WILVA001'],
        'PROMOCION02' => ['comision' => 0.013, 'swift' => 60.0,  'label' => 'Promoción Especial 02'],
        'PROMOCION03' => ['comision' => 0.010, 'swift' => 60.0,  'label' => 'Promoción Especial 03']
    ],
    'whatsapp' => [
        'lapaz'      => '59178922125',
        'cochabamba' => '59178920737',
        'msg_send'   => 'Hola WILVA CAPITAL, deseo realizar una transferencia internacional.',
        'msg_quote'  => 'Hola WILVA CAPITAL, deseo consultar la cotización del día.'
    ],
    'office' => [
        'city'    => 'Ciudad de El Alto',
        'country' => 'BOLIVIA',
        'address' => 'Av. Santiago II, Calle 3'
    ]
];