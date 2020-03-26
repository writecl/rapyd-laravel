<?php namespace Writecl\Rapyd\Facades;

use Illuminate\Support\Facades\Facade;

class DataTree extends Facade
{
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'Writecl\Rapyd\DataTree\DataTree'; }

}
