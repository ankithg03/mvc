<?php
namespace Controller;

use Model\TemplateLoader;

/**
 * Controller for NotFoundPage
 * 
 * @class NotFoundPage
 * @author Ankith G <ankith@codilar.com>
 *
 */
class NotFoundPage extends TemplateLoader
{
    /**
     * ViewFile Name
     *
     * @var string
     */
    protected $templateName = '404.php';

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
