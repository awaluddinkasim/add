<?php

return [
  [
    'active' => 'dashboard',
    'label' => 'Dashboard',
    'route-name' => 'dashboard',
    // 'route_params' => [],
    'icon' => 'home',
    'admin-only' => false,
  ],
  [
    'active' => 'operators',
    'label' => 'Operator',
    'route-name' => 'operator',
    // 'route_params' => [],
    'icon' => 'users',
    'admin-only' => true,
  ],
  [
    'active' => 'perencanaan',
    'label' => 'Perencanaan',
    'icon' => 'book-copy',
    'submenu' => [
      [
        'active' => 'kategori-program',
        'label' => 'Kategori Program',
        'route-name' => 'kategori-program',
        // 'route_params' => [],
      ],
      [
        'active' => 'program',
        'label' => 'Program',
        'route-name' => 'program',
        // 'route_params' => [],
      ],
      [
        'active' => 'kegiatan',
        'label' => 'Kegiatan',
        'route-name' => 'kegiatan',
        // 'route_params' => [],
      ],
    ],
    'admin-only' => false,
  ],
  [
    'active' => 'keuangan',
    'label' => 'Keuangan',
    'icon' => 'banknote',
    'submenu' => [
      [
        'active' => 'sumber-dana',
        'label' => 'Sumber Dana',
        'route-name' => 'sumber-dana',
        // 'route_params' => [],
      ],
      [
        'active' => 'penerimaan-dana',
        'label' => 'Penerimaan Dana',
        'route-name' => 'penerimaan-dana',
        // 'route_params' => [],
      ],
      [
        'active' => 'pengeluaran-dana',
        'label' => 'Pengeluaran Dana',
        'route-name' => 'pengeluaran-dana',
        // 'route_params' => [],
      ]
    ]
  ],
  [
    'active' => 'laporan',
    'label' => 'Laporan',
    'route-name' => 'laporan',
    // 'route_params' => [],
    'icon' => 'file',
    'admin-only' => false,
  ],
];
