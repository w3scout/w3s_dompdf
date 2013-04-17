<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');
/**
 * Created by JetBrains PhpStorm.
 * User: darko
 * Date: 12.04.13
 * Time: 10:50
 * To change this template use File | Settings | File Templates.
 */

require_once (TL_ROOT . '/system/modules/dompdf/resources/dompdf_config.inc.php');

class ContaoDOMPDF extends \DOMPDF
{

    public function __construct()
    {
        parent::__construct();
    }
}