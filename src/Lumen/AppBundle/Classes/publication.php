<?php
/**
 * Created by PhpStorm.
 * User: christopher
 * Date: 8/31/16
 * Time: 9:58 AM
 */

namespace Lumen\AppBundle\Classes;


class Publication
{
    public function getSlugCreate($cadena, $separador = '-')
    {
        $slug = iconv('UTF-8', 'ASCII//TRANSLIT', $cadena);
        $slug = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $slug);
        $slug = strtolower(trim($slug, $separador));
        $slug = preg_replace("/[\/_|+ -]+/", $separador, $slug);
        return $slug;
    }
}