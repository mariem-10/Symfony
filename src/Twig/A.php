<?php

namespace App\Twig;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class A extends AbstractExtension{
    public function getFilters()
    {
        return [new TwigFilter('badge',[$this, 'badgeFilter'], ['is_safe'=> ['html']])];
    }
    public function badgeFilter($content, array $options = [], $color="primary") : String {
        $defaultOptions = [
            'color' => 'primary'
        ];
        $options = array_merge($defaultOptions, $options);
        $color = $options['color'];
        return '<span class="badge badge-'.$color.'">'. $content .'</span>';
    }
}
