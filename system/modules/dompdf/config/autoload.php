<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @package Dompdf
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'ContaoDOMPDF'  => 'system/modules/dompdf/ContaoDOMPDF.php',
	'DompdfIgniter' => 'system/modules/dompdf/DompdfIgniter.php',
    'Cpdf' => 'system/modules/dompdf/resources/lib/class.pdf.php',
    'Absolute_Positioner' => 'system/modules/dompdf/resources/include/absolute_positioner.cls.php',
    'Abstract_Renderer' => 'system/modules/dompdf/resources/include/abstract_renderer.cls.php',
    'Attribute_Translator' => 'system/modules/dompdf/resources/include/attribute_translator.cls.php',
    'Autoload' => 'system/modules/dompdf/resources/include/autoload.inc.php',
    'Block_Frame_Decorator' => 'system/modules/dompdf/resources/include/block_frame_decorator.cls.php',
    'Block_Frame_Reflower' => 'system/modules/dompdf/resources/include/block_frame_reflower.cls.php',
    'Block_Positioner' => 'system/modules/dompdf/resources/include/block_positioner.cls.php',
    'Block_Renderer' => 'system/modules/dompdf/resources/include/block_renderer.cls.php',
    'Cached_Pdf_Decorator' => 'system/modules/dompdf/resources/include/cached_pdf_decorator.cls.php',
    'Canvas' => 'system/modules/dompdf/resources/include/canvas.cls.php',
    'Canvas_Factory' => 'system/modules/dompdf/resources/include/canvas_factory.cls.php',
    'Cellmap' => 'system/modules/dompdf/resources/include/cellmap.cls.php',
    'CPDF_Adapter' => 'system/modules/dompdf/resources/include/cpdf_adapter.cls.php',
    'CSS_Color' => 'system/modules/dompdf/resources/include/css_color.cls.php',
    'Dompdf' => 'system/modules/dompdf/resources/include/dompdf.cls.php',
    'Dompdf_Exception' => 'system/modules/dompdf/resources/include/dompdf_exception.cls.php',
    'Dompdf_Image_Exception' => 'system/modules/dompdf/resources/include/dompdf_image_exception.cls.php',
    'Fixed_Positioner' => 'system/modules/dompdf/resources/include/fixed_positioner.cls.php',
    'Font_Metrics' => 'system/modules/dompdf/resources/include/font_metrics.cls.php',
    'Frame' => 'system/modules/dompdf/resources/include/frame.cls.php',
    'Frame_Decorator' => 'system/modules/dompdf/resources/include/frame_decorator.cls.php',
    'Frame_Factory' => 'system/modules/dompdf/resources/include/frame_factory.cls.php',
    'Frame_Reflower' => 'system/modules/dompdf/resources/include/frame_reflower.cls.php',
    'Frame_Tree' => 'system/modules/dompdf/resources/include/frame_tree.cls.php',
    'Functions' => 'system/modules/dompdf/resources/include/functions.inc.php',
    'Gd_Adapter' => 'system/modules/dompdf/resources/include/gd_adapter.cls.php',
    'Image_Cache' => 'system/modules/dompdf/resources/include/image_cache.cls.php',
    'Image_Frame_Decorator' => 'system/modules/dompdf/resources/include/image_frame_decorator.cls.php',
    'Image_Frame_Reflower' => 'system/modules/dompdf/resources/include/image_frame_reflower.cls.php',
    'Image_Renderer' => 'system/modules/dompdf/resources/include/image_renderer.cls.php',
    'Inline_Frame_Decorator' => 'system/modules/dompdf/resources/include/inline_frame_decorator.cls.php',
    'Inline_Frame_Reflower' => 'system/modules/dompdf/resources/include/inline_frame_reflower.cls.php',
    'Inline_Positioner' => 'system/modules/dompdf/resources/include/inline_positioner.cls.php',
    'Inline_Renderer' => 'system/modules/dompdf/resources/include/inline_renderer.cls.php',
    'Javascript_Embedder' => 'system/modules/dompdf/resources/include/javascript_embedder.cls.php',
    'Line_Box' => 'system/modules/dompdf/resources/include/line_box.cls.php',
    'List_Bullet_Frame_Decorator' => 'system/modules/dompdf/resources/include/list_bullet_frame_decorator.cls.php',
    'List_Bullet_Frame_Reflower' => 'system/modules/dompdf/resources/include/list_bullet_frame_reflower.cls.php',
    'List_Bullet_Image_Frame_Decorator' => 'system/modules/dompdf/resources/include/list_bullet_image_frame_decorator.cls.php',
    'List_Bullet_Positioner' => 'system/modules/dompdf/resources/include/list_bullet_positioner.cls.php',
    'List_Bullet_Renderer' => 'system/modules/dompdf/resources/include/list_bullet_renderer.cls.php',
    'Null_Frame_Decorator' => 'system/modules/dompdf/resources/include/null_frame_decorator.cls.php',
    'Null_Frame_Reflower' => 'system/modules/dompdf/resources/include/null_frame_reflower.cls.php',
    'Null_Positioner' => 'system/modules/dompdf/resources/include/null_positioner.cls.php',
    'Page_Cache' => 'system/modules/dompdf/resources/include/page_cache.cls.php',
    'Page_Frame_Decorator' => 'system/modules/dompdf/resources/include/page_frame_decorator.cls.php',
    'Page_Frame_Reflower' => 'system/modules/dompdf/resources/include/page_frame_reflower.cls.php',
    'Pdflib_Adapter' => 'system/modules/dompdf/resources/include/pdflib_adapter.cls.php',
    'Php_Evaluator' => 'system/modules/dompdf/resources/include/php_evaluator.cls.php',
    'Positioner' => 'system/modules/dompdf/resources/include/positioner.cls.php',
    'Renderer' => 'system/modules/dompdf/resources/include/renderer.cls.php',
    'Style' => 'system/modules/dompdf/resources/include/style.cls.php',
    'Stylesheet' => 'system/modules/dompdf/resources/include/stylesheet.cls.php',
    'Table_Cell_Frame_Decorator' => 'system/modules/dompdf/resources/include/table_cell_frame_decorator.cls.php',
    'Table_Cell_Frame_Reflower' => 'system/modules/dompdf/resources/include/table_cell_frame_reflower.cls.php',
    'Table_Cell_Positioner' => 'system/modules/dompdf/resources/include/table_cell_positioner.cls.php',
    'Table_Cell_Renderer' => 'system/modules/dompdf/resources/include/table_cell_renderer.cls.php',
    'Table_Frame_Decorator' => 'system/modules/dompdf/resources/include/table_frame_decorator.cls.php',
    'Table_Frame_Reflower' => 'system/modules/dompdf/resources/include/table_frame_reflower.cls.php',
    'Table_Row_Frame_Decorator' => 'system/modules/dompdf/resources/include/table_row_frame_decorator.cls.php',
    'Table_Row_Frame_Reflower' => 'system/modules/dompdf/resources/include/table_row_frame_reflower.cls.php',
    'Table_Row_Group_Frame_Decorator' => 'system/modules/dompdf/resources/include/table_row_group_frame_decorator.cls.php',
    'Table_Row_Group_Frame_Reflower' => 'system/modules/dompdf/resources/include/table_row_group_frame_reflower.cls.php',
    'Table_Row_Group_Renderer' => 'system/modules/dompdf/resources/include/table_row_group_renderer.cls.php',
    'Table_Row_Positioner' => 'system/modules/dompdf/resources/include/table_row_positioner.cls.php',
    'Tcpdf_Adapter' => 'system/modules/dompdf/resources/include/tcpdf_adapter.cls.php',
    'Text_Frame_Decorator' => 'system/modules/dompdf/resources/include/text_frame_decorator.cls.php',
    'Text_Frame_Reflower' => 'system/modules/dompdf/resources/include/text_frame_reflower.cls.php',
    'Text_Renderer' => 'system/modules/dompdf/resources/include/text_renderer.cls.php',

    // Experiementiell (HTML5 Support in DOMPDF ist deaktiviert)
    'HTML5_Data'            => 'system/modules/dompdf/resources/lib/html5lib/Data.php',
    'HTML5_InputStream'     => 'system/modules/dompdf/resources/lib/html5lib/InputStream.php',
    'HTML5_Parser'          => 'system/modules/dompdf/resources/lib/html5lib/Parser.php',
    'HTML5_Tokenizer'       => 'system/modules/dompdf/resources/lib/html5lib/Tokenizer.php',
    'HTML5_TreeBuilder'     => 'system/modules/dompdf/resources/lib/html5lib/TreeBuilder.php',

));