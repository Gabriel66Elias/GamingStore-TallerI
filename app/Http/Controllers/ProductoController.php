<?php

namespace App\Http\Controllers;

class ProductoController extends Controller
{
    private function getProductos()
    {
        return [
            // --- CONSOLAS ---
            0 => [
                'nombre' => 'PlayStation 5',
                'descripcion' => 'Vive una experiencia de juego de nueva generación con la PlayStation 5.',
                'imagen' => '/img/ps5.webp',
                'precio' => 1200000,
                'stock' => 1,
                'specs' => ['Procesador AMD Ryzen Zen 2', '825GB SSD', 'DualSense included'],
                'categoria' => 'Consolas'
            ],
            2 => [
                'nombre' => 'Nintendo Switch',
                'descripcion' => 'Juega en el televisor o en modo portátil con total libertad.',
                'imagen' => '/img/sw2.webp',
                'precio' => 459999,
                'stock' => 10,
                'specs' => ['Pantalla 6.2"', '32GB memoria', 'Joy-Con'],
                'categoria' => 'Consolas'
            ],
            6 => [
                'nombre' => 'Xbox Series X',
                'descripcion' => 'La Xbox más rápida y potente de la historia. Juega a miles de títulos de cuatro generaciones.',
                'imagen' => '/img/xboxx.webp',
                'precio' => 1150000,
                'stock' => 3,
                'specs' => ['12 Teraflops de potencia', 'SSD NVMe de 1TB', 'Juego en 4K y hasta 120 FPS'],
                'categoria' => 'Consolas'
            ],

            // --- HARDWARE ---
            3 => [
                'nombre' => 'Tarjeta grafica RTX 5090',
                'descripcion' => 'Descubre la tarjeta grafica mas poderosa de nvidea.',
                'imagen' => '/img/rtx5090.webp',
                'precio' => 2600000,
                'stock' => 2,
                'specs' => ['32GB GDDR7', 'Arquitectura Blackwell', 'DLSS 4.0'],
                'categoria' => 'Hardware'
            ],
            4 => [
                'nombre' => 'Tarjeta grafica RX 6600xt',
                'descripcion' => 'Tarjeta grafica de gama media exelente para juego en 1080p',
                'imagen' => '/img/rx6600xt.webp',
                'precio' => 450000,
                'stock' => 3,
                'specs' => ['8GB GDDR6', 'FSR 3.0', '1080p Ultra'],
                'categoria' => 'Hardware'
            ],
            5 => [
                'nombre' => 'Memoria RAM 32gb (x2 16gb) HyperX',
                'descripcion' => 'Pack de 2 memorias ram de 16gb 3200hz con rgb',
                'imagen' => '/img/ram.webp',
                'precio' => 98000,
                'stock' => 3,
                'specs' => ['3200MHz', 'CL16', 'RGB Lighting'],
                'categoria' => 'Hardware'
            ],
            7 => [
                'nombre' => 'Procesador AMD Ryzen 5 5600G',
                'descripcion' => 'Rendimiento potente para gaming y multitarea con gráficos integrados Radeon.',
                'imagen' => '/img/ryzen55600g.webp',
                'precio' => 245000,
                'stock' => 8,
                'specs' => ['6 Núcleos / 12 Hilos', 'Gráficos integrados Radeon', 'Reloj base 3.9 GHz', 'Socket AM4'],
                'categoria' => 'Hardware'
            ],
            8 => [
                'nombre' => 'Motherboard ASUS ROG Strix B550-F',
                'descripcion' => 'Placa base gaming optimizada para procesadores Ryzen con PCIe 4.0 y Aura Sync RGB.',
                'imagen' => '/img/asus-b550f.webp',
                'precio' => 290000,
                'stock' => 5,
                'specs' => ['Chipset B550', 'Soporte PCIe 4.0', 'Doble M.2', 'Audio SupremeFX'],
                'categoria' => 'Hardware'
            ],
            9 => [
                'nombre' => 'SSD M.2 1TB Samsung 980 PRO',
                'descripcion' => 'Velocidades de lectura asombrosas para que tus juegos carguen al instante.',
                'imagen' => '/img/samsung-980pro.webp',
                'precio' => 165000,
                'stock' => 15,
                'specs' => ['NVMe M.2 PCIe 4.0', 'Lectura hasta 7000 MB/s', 'Caché DRAM'],
                'categoria' => 'Hardware'
            ],
            10 => [
                'nombre' => 'Fuente de Poder Corsair RM750x',
                'descripcion' => 'Energía limpia, silenciosa y eficiente para los componentes más exigentes.',
                'imagen' => '/img/corsair-rm750x.webp',
                'precio' => 195000,
                'stock' => 4,
                'specs' => ['750 Watts', 'Certificación 80 Plus Gold', 'Totalmente Modular'],
                'categoria' => 'Hardware'
            ],

            // --- PERIFÉRICOS ---
            1 => [
                'nombre' => 'Mando - PlayStation 5',
                'descripcion' => 'Descubre una experiencia de juego más profunda con retroalimentación háptica.',
                'imagen' => '/img/mando-ps5.webp',
                'precio' => 75000,
                'stock' => 5,
                'specs' => ['Retroalimentación háptica', 'Gatillos adaptativos'],
                'categoria' => 'Periféricos'
            ],
            11 => [
                'nombre' => 'Teclado Razer BlackWidow V3',
                'descripcion' => 'El teclado mecánico icónico para gamers, ahora con switches mejorados y RGB Chroma.',
                'imagen' => '/img/razer-blackwidow.webp',
                'precio' => 185000,
                'stock' => 6,
                'specs' => ['Switches Mecánicos Verdes', 'Iluminación RGB Razer Chroma', 'Reposamuñecas ergonómico'],
                'categoria' => 'Periféricos'
            ],
            12 => [
                'nombre' => 'Mouse Logitech G Pro X Superlight',
                'descripcion' => 'Ratón ultraligero diseñado para profesionales de los eSports. Sin cables, sin límites.',
                'imagen' => '/img/logitech-gpro.webp',
                'precio' => 150000,
                'stock' => 7,
                'specs' => ['Peso menor a 63 gramos', 'Sensor HERO 25K', 'Inalámbrico LIGHTSPEED'],
                'categoria' => 'Periféricos'
            ],
            13 => [
                'nombre' => 'Auriculares HyperX Cloud II',
                'descripcion' => 'Comodidad legendaria y sonido inmersivo para largas sesiones de juego.',
                'imagen' => '/img/hyperx-cloud2.webp',
                'precio' => 120000,
                'stock' => 12,
                'specs' => ['Sonido Envolvente Virtual 7.1', 'Micrófono con cancelación de ruido', 'Almohadillas de memory foam'],
                'categoria' => 'Periféricos'
            ],

            // --- GAMING TVs & MONITORES ---
            14 => [
                'nombre' => 'Monitor Gaming LG UltraGear 27"',
                'descripcion' => 'Monitor IPS de alta tasa de refresco para obtener ventaja competitiva en shooters.',
                'imagen' => '/img/monitor-lg-27.webp',
                'precio' => 420000,
                'stock' => 4,
                'specs' => ['Panel IPS de 27 Pulgadas', 'Tasa de refresco de 144Hz', 'Tiempo de respuesta 1ms', 'G-SYNC Compatible'],
                'categoria' => 'TVs y Monitores'
            ],
            15 => [
                'nombre' => 'Smart TV LG OLED 55" 4K',
                'descripcion' => 'La mejor experiencia visual para consolas de nueva generación con negros puros.',
                'imagen' => '/img/tv-lg-oled55.webp',
                'precio' => 1850000,
                'stock' => 2,
                'specs' => ['55 Pulgadas OLED 4K', 'Tasa de refresco 120Hz', 'HDMI 2.1 con VRR', 'Dolby Vision Gaming'],
                'categoria' => 'TVs y Monitores'
            ]
        ];
    }

    public function index()
    {
        $productosRaw = $this->getProductos();
        
        // Guardamos el ID dentro del array para no perderlo al agrupar
        foreach ($productosRaw as $id => $producto) {
            $productosRaw[$id]['id'] = $id;
        }

        // Agrupamos por la nueva llave 'categoria'
        $productosAgrupados = collect($productosRaw)->groupBy('categoria');
        
        return view('catalogo', compact('productosAgrupados'));
    }

    public function show($id)
    {
        $productos = $this->getProductos();

        if (!isset($productos[$id])) {
            return redirect('/catalogo');
        }

        $producto = $productos[$id];
        return view('consultas', compact('producto'));
    }
}