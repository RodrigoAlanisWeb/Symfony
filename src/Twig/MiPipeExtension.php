<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class MiPipeExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            // If your filter generates SAFE HTML, you should add a third
            // parameter: ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/2.x/advanced.html#automatic-escaping
            new TwigFilter('multiplicar', [$this, 'table']),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('multiplicar', [$this, 'table']),
        ];
    }

    public function table($num)
    {
        $table = "<h1>Tabla del $num</h1>";
        
        for ($i=0; $i <= 12; $i++) { 
            $table .= "<h2>$num x$i = " . ($num * $i) . "</h2>"; 
        }

        return $table;

    }
}
