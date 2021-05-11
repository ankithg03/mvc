<?php
namespace Controller;

use Model\TemplateLoader;

/**
 * Controller for SignupPage
 * 
 * @class SignupPage
 * @author Ankith G <ankith@codilar.com>
 *
 */
class SignupPage extends TemplateLoader
{
    /**
     * ViewFile Name
     *
     * @var string
     */
    protected $templateName = 'signup_page.php';

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
