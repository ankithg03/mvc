<?php
namespace Controller;

use Model\LoginModel;

/**
 * Controller for LoginPage
 * 
 * @class LoginPage
 * @author Ankith G <ankith@codilar.com>
 *
 */
class UserLogin extends LoginModel
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
       $this->init();
    }

    
    
}
