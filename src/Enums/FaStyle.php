<?php
namespace Fortifi\FontAwesome\Enums;

class FaStyle extends FaEnum
{
  const REGULAR = 'far';
  const LIGHT = 'fal';
  const DUOTONE = 'fad';
  const SOLID = 'fas';
  const BRANDS = 'fab';

  public static function getValues()
  {
    return [FaStyle::BRANDS, FaStyle::REGULAR, FaStyle::LIGHT, FaStyle::SOLID, FaStyle::DUOTONE];
  }
}
