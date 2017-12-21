<?php
/**
 * @category  German
 * @package   German_LocalePack
 * @authors   MaWoScha <mawoscha@siempro.co, http://www.siempro.co/>
 * @developer MaWoScha <mawoscha@siempro.co, http://www.siempro.co/>
 * @version   0.1.0
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class German_LocalePackDeZz_Block_System_Config_Form_Fieldset_Extensions
    extends Mage_Adminhtml_Block_System_Config_Form_Fieldset
{
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
        $helper = Mage::helper("localepackdezz");

        $html  = $this->_getHeaderHtml($element);
		$html .= "<h3 style='margin-top:20px; margin-bottom:10xp;'>".$helper->__("Specific market adjustment for")." ".$helper->__("custom stores")."</h3>";
        $html  = $this->_getHeaderHtml($element);
        $html .= "<p>".$helper->__("The installed language pack only provides translations of in Magento existing texts. If you want to prepare your Magento store on the legal requirements in %s or expand common payment methods, we recommend to install the following additional extensions.",
                 $helper->__("Germany"))."</p>";
        $html .= $this->_getFooterHtml($element);

        return $html;
    }
}
