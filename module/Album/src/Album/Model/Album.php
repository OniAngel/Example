<?php
/**
 * Created by PhpStorm.
 * User: yorick
 * Date: 9-2-17
 * Time: 17:18
 */

namespace Album\Model;

class Album
    {
        public $id;
        public $artist;
        public $title;

        public function exchangeArray($data)
        {
            $this->id   = (!empty($data['id'])) ? $data['id'] : null;
            $this->artist   = (!empty($data['artist'])) ? $data['artist'] : null;
            $this->title   = (!empty($data['title'])) ? $data['title'] : null;
        }
    }