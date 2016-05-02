<?php
/**
 * This controller contains all functions for serving all static pages
 * @copyright  Copyright (c) 2016 Benjamin BALET
 * @license    http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link       https://github.com/bbalet/peak
 * @since      0.1.0
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
    
    /**
     * Serve a static page
     * @param string $page name of the static page
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function view($page = 'home') {
        if (!file_exists(APPPATH . '/views/pages/' . $page . '.php')) {
            show_404();
        }
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu-frontend', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer');
    }

}
