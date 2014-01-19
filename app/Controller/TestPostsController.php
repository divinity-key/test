<?php

class TestPostsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('test_posts', $this->TestPost->find('all'));
        $this->set('title_for_layout', '記事一覧');
    }

}

