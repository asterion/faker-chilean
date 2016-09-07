<?php
namespace Tidor\FakerChilean\Provider;

use Faker\Provider\Base as ProviderBase;

/**
 * Category words
 */
class Category extends ProviderBase
{
    protected static $categories = [
        'Bebidas',
        'Carnes',
        'Condimentos',
        'Frutas',
        'Verduras',
        'Granos',
        'Cereales',
        'Lácteos',
        'Pescados',
        'Mariscos',
        'Repostería',
        'Electrodomésticos',
        'Computadores',
        'Notebooks',
        'Tablets',
        'Monitores',
        'TV Audio',
        'Electrohogar',
        'Computación',
        'Telefonía',
        'Entretenimiento',
        'Muebles',
        'Dormitorio',
        'Deportes',
        'Infantil',
        'Belleza',
        'Zapatos y Bolsos',
        'Moda',
    ];

    public function category()
    {
        return static::randomElement(static::$categories);
    }
}
