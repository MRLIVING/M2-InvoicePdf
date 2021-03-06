<?php

namespace Mrl\InvoicePdf\Sales\Model\Order\Pdf;


#use Magento\Sales\Model\Order\Pdf\Invoice as InvoicePdf;

class Invoice extends \Magento\Sales\Model\Order\Pdf\Invoice
{
    /**
     * Set font as regular
     *
     * @param \Zend_Pdf_Page $object
     * @param int $size
     * @return \Zend_Pdf_Resource_Font
     */
    protected function _setFontRegular($object, $size = 7)
    {
        $font = \Zend_Pdf_Font::fontWithPath(
            $this->_rootDirectory->getAbsolutePath('lib/internal/GnuFreeFont/Fireflysung.ttf')
        );
        $object->setFont($font, $size);
        return $font;
    }

    /**
     * Set font as bold
     *
     * @param \Zend_Pdf_Page $object
     * @param int $size
     * @return \Zend_Pdf_Resource_Font
     */
    protected function _setFontBold($object, $size = 7)
    {
        $font = \Zend_Pdf_Font::fontWithPath(
            $this->_rootDirectory->getAbsolutePath('lib/internal/GnuFreeFont/Fireflysung.ttf')
        );
        $object->setFont($font, $size);
        return $font;
    }
	
    /**
     * Set font as italic
     *
     * @param \Zend_Pdf_Page $object
     * @param int $size
     * @return \Zend_Pdf_Resource_Font
     */
    protected function _setFontItalic($object, $size = 7)
    {
        $font = \Zend_Pdf_Font::fontWithPath(
            $this->_rootDirectory->getAbsolutePath('lib/internal/GnuFreeFont/Fireflysung.ttf')
        );
        $object->setFont($font, $size);
        return $font;
    }


}

