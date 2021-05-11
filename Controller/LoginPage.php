<?php
namespace Controller;

use Model\TemplateLoader;

/**
 * Controller for LoginPage
 * 
 * @class LoginPage
 * @author Ankith G <ankith@codilar.com>
 *
 */
class LoginPage extends TemplateLoader
{
    /**
     * ViewFile Name
     *
     * @var string
     */
    protected $templateName = 'login_page.php';

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
