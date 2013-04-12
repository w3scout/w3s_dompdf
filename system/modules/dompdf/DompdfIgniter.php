<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Leo Feyer 2005-2011
 * @author     Leo Feyer <http://www.contao.org>
 * @package    DomPdf
 * @license    LGPL
 * @filesource
 */


/**
 * Class DompdfIgniter
 *
 * Provide methods to export articles as PDF using DOMPDF.
 * @copyright  Leo Feyer 2009-2011
 * @author     Leo Feyer <http://www.contao.org>
 * @package    Controller
 */
class DompdfIgniter extends Frontend
{

	/**
	 * Export an article to PDF
	 * @param string
	 * @param object
	 * @return string
	 */
	protected function generatePdf($strArticle, ModuleArticle $objArticle)
	{
		if (!$GLOBALS['TL_CONFIG']['useDompdf'])
		{
			return;
		}

		// Add head section
		$strHtml = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">' . "\n";
		$strHtml .= '<html xmlns="http://www.w3.org/1999/xhtml">' . "\n";
		$strHtml .= '<head>' . "\n";
		$strHtml .= '<title>' . $objArticle->title . '</title>' . "\n";
		$strHtml .= '<meta http-equiv="Content-Type" content="text/html; charset=' . $GLOBALS['TL_CONFIG']['characterSet'] . '" />' . "\n";
		$strHtml .= '<base href="' . $this->Environment->base . '"></base>' . "\n";

		$objStylesheet = $this->Database->execute("SELECT * FROM tl_style_sheet");

		// Add stylesheets
		while ($objStylesheet->next())
		{
			$arrMedia = deserialize($objStylesheet->media, true);

			if (in_array('print', $arrMedia) || in_array('all', $arrMedia))
			{
				$strHtml .= '<link rel="stylesheet" type="text/css" href="' . $objStylesheet->name . '.css" />' . "\n";
			}
		}

		// Convert the Euro symbol
		$strArticle = str_replace('€', '&#0128;', $strArticle);

		// Make sure there is no background
		$strHtml .= '<style type="text/css">' . "\n";
		$strHtml .= 'body { background:none; background-color:#ffffff; }' . "\n";
		$strHtml .= '</style>' . "\n";
		$strHtml .= '</head>' . "\n";
		$strHtml .= '<body>' . "\n";
		$strHtml .= $strArticle . "\n";
		$strHtml .= '</body>' . "\n";
		$strHtml .= '</html>';

		// Generate DOMPDF object
		require_once(TL_ROOT . '/system/modules/dompdf/resources/dompdf_config.inc.php');
		$dompdf = new DOMPDF();

		$dompdf->set_paper('a4');
		$dompdf->set_base_path(TL_ROOT);
		$dompdf->load_html($strHtml);
		$dompdf->render();

		$dompdf->stream(standardize(ampersand($objArticle->title, false)) . '.pdf');

		// Stop script execution
		exit;
	}
}

?>