<?php
/**
 * This controller contains all functions for grammar section
 * @copyright  Copyright (c) 2016 Benjamin BALET
 * @license    http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link       https://github.com/bbalet/peak
 * @since      0.1.0
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Grammar extends CI_Controller {

    /**
     * Default constructor
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * Display a sketch panel allowing users to train drawing the khmer letters
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function sketch() {
        $data['title'] = 'Draw letters';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu-frontend', $data);
        $this->load->view('grammar/sketch', $data);
        $this->load->view('templates/footer');
    }
    
    /**
     * Display the list of khmer consonants
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function consonants() {
        $data['title'] = 'List of consonants';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu-frontend', $data);
        $this->load->view('grammar/consonants', $data);
        $this->load->view('templates/footer');
    }
}
