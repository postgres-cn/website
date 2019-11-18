<?php
class Feed extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('news_model');
    }

    public function index() {
	    $data['news'] = $this->news_model->get_feeds();
        header('Content-Type: application/rss+xml');

	    $this->load->view('v2/news/feed', $data);
    }
}

