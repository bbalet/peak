<?php
/**
 * This controller contains all functions for lessons section
 * @copyright  Copyright (c) 2016 Benjamin BALET
 * @license    http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link       https://github.com/bbalet/peak
 * @since      0.1.0
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Lessons extends CI_Controller {

    /**
     * Default constructor
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * Display the list of khmer consonants
     * @param int $lessonId Identifier of the lesson
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function view($lessonId = 1) {
        $data['title'] = 'Lesson #' . $lessonId;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu-frontend', $data);
        $this->load->view('lessons/view', $data);
        $this->load->view('templates/footer');
    }
}
