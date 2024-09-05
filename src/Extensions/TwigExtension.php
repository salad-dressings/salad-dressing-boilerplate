<?php

namespace Salad\Dressing\ImageBanner\Extensions;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use Twig\TwigFilter;

use Salad\Core\Application;
use Salad\Core\Database;
use Salad\Core\BaseComponent;
use App\Models\User;

class TwigExtension extends AbstractExtension
{
    
    public function getFunctions(): array
    {
      return [
        new TwigFunction('get_sample_function', [$this, 'getSampleFunction']),
      ];
    }


    public function getSampleFunction()
    {
      return "Hello World!";
    }
    
}
