<?php
namespace Model;

/**
 * TemplateLoader for DashboardPage
 * 
 * @class DashboardPage
 * @author Ankith G <ankith@codilar.com>
 *
 */
abstract class TemplateLoader
{
    const HEADER_FILE = 'header.php';
    const FOOTER_FILE = 'footer.php';

    /**
     * An Abstract Functionality to createTemplate
     *
     * @param string $template
     * @return bool
     */
    public function createTemplate($template) {
        $basePath = explode('/index.php', $_SERVER['SCRIPT_FILENAME'])[0]|'';
        $file = $basePath . "/view/$template";
        if (is_readable($file)) {
             require_once $file;
             return true;
        }
        return false;
    }
    public function getHeader()
    {
      return $this->createTemplate(self::HEADER_FILE);
    }

    public function getFooter()
    {
        return $this->createTemplate(self::FOOTER_FILE);
    }
    public function getUrl(){
        return sprintf(
          "%s://%s%s",
          isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
          $_SERVER['SERVER_NAME'],
          explode('/index.php',$_SERVER['SCRIPT_NAME'])[0]
        );
    }
}
