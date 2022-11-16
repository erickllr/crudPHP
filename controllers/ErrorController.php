<?php
class ErrorController
{
  /**
   * Función que redirige a la vista Error 404
   */

  public static function _404()
  {
    echo $GLOBALS['twig']->render(
      'error/404.twig',
      ['URL' => URL]
    );
  }

  /**
   * Función que redirige a la vista ERROR 403
   */
  public static function _403()
  {
    echo $GLOBALS['twig']->render(
      'error/403.twig',
      ['URL' => URL]
    );
  }
  /**
   * Función que redirige a la vista ERROR 500
   */
  public static function _500()
  {
    echo $GLOBALS['twig']->render(
      'error/500.twig',
      ['URL' => URL]
    );
  }
}
