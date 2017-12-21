<?php
/**
 * @category  German
 * @package   German_LocalePack
 * @authors   MaWoScha <mawoscha@siempro.co, http://www.siempro.co/>
 * @developer MaWoScha <mawoscha@siempro.co, http://www.siempro.co/>
 * @version   0.1.0
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class German_LocalePackDeZz_Block_System_Config_Form_Fieldset_Instructions
    extends Mage_Adminhtml_Block_System_Config_Form_Fieldset
{
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
        $nodepath = "modules/German_LocalePackDeZz";
        $helper = Mage::helper("localepackdezz");

        $modules = Mage::getConfig()->getNode('modules')->children();
        $section_link = Mage::helper('adminhtml')->getUrl('adminhtml/system_config/edit', array('section'=>'general'));

        $html  = $this->_getHeaderHtml($element);
        $html .= "<p style='font-weight:bold;'>";
        $html .= $helper->__("The %s language pack in version %s has been successfully installed.",
                (string)Mage::app()->getConfig()->getNode($nodepath.'/locale'),
                (string)Mage::app()->getConfig()->getNode($nodepath.'/version') );
        $html .= "</p>";
    if (!array_key_exists("German_LocaleFallback", $modules)) {
        $html .= "<p>".$helper->__("Note: Install the extension %s, so you can use %s as a <a href='%s'>fallback language</a>.",
                "de_DE",
                "<a href='https://github.com/MaWoScha/German_LocaleFallback'>German LocaleFallback</a>",
                $section_link )."</p>";
    } else if (!array_key_exists("German_LocalePackDe", $modules)) {
        $html .= "<p>".$helper->__("Note: Install the language package %s to use it as a <a href='%s'>fallback language</a>.",
                "<a href='https://github.com/MaWoScha/German_LocalePack_de_DE'>German LocalePackDe</a>",
                $section_link )."</p>";
    }
        $html .= "<p style='margin-top:10pt;'>";
        $html .= $helper->__("This is your individual language pack that is only managed and maintained by you.");
        $html .= "<br />";
        $html .= $helper->__('Adjust the file "%s" with your name and the link to your website.', "etc/config.xml");
        $html .= "</p>";

        $html .= "<p style='text-align:right;'>";
        $html .= $helper->__("powered by");
        $html .= " <a href='".(string)Mage::app()->getConfig()->getNode($nodepath.'/link')."' target='_blank'>".(string)Mage::app()->getConfig()->getNode($nodepath.'/author')."</a>";
        $html .= "</p>";
        $html .= $this->_getFooterHtml($element);

        return $html;
    }
}
