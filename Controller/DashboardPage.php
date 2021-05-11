<?php
namespace Controller;

use Model\TemplateLoader;

/**
 * Controller for DashboardPage
 * 
 * @class DashboardPage
 * @author Ankith G <ankith@codilar.com>
 *
 */
class DashboardPage extends TemplateLoader
{
    /**
     * ViewFile Name
     *
     * @var string
     */
    protected $templateName = 'dashboard_page.php';
    
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
