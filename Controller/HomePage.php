<?php
namespace Controller;

use Model\TemplateLoader;

/**
 * Controller for HomePage
 * 
 * @class HomePage
 * @author Ankith G <ankith@codilar.com>
 *
 */
class HomePage extends TemplateLoader
{
    /**
     * ViewFile Name
     *
     * @var string
     */
    protected $templateName = 'home_page.php';

    /**
     * an instance of template loader
     *
     * @var TemplateLoader
     */
    private $template;

    /**
     * Renders The view
     *
     * @return void
     */
    public function render()
    {
        $this->getHeader();
        $this->createTemplate($this->templateName);
        $this->getFooter();
    }
    
}
