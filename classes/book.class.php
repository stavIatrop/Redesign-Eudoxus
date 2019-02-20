<?php
    class Book {

        private $title;
        private $authors;
        private $ISBN;
        private $publisher;
        private $year;
        private $keywords;
        private $weight;
        private $dimensions;
        private $pages;
        private $price;
        private $preview;
        private $index;
        private $cover;

        function __construct() {
            $this->title = null;
            $this->authors = null;
            $this->ISBN = null;
            $this->publisher = null;
            $this->year = null;
            $this->keywords = null;
            $this->weight = null;
            $this->dimensions = null;
            $this->pages = null;
            $this->price = null;
        }
    
        public function getTitle() {
    
            return $this->title;
        }
    
    
        public function setTitle($title) {
            $this->title = $title;
        }
    
        public function getAuthors() {
            return $this->authors;
        }
    
        public function setAuthors($authors) {
            $this->authors = $authors;
        }
    
        public function getISBN() {
    
            return $this->ISBN;
        }
    
        public function setISBN($ISBN) {
    
            $this->ISBN = $ISBN;
        }
    
        public function getPublisher() {
    
            return $this->publisher;
        }
    
        public function setPublisher($publisher) {
    
            $this->publisher = $publisher;
            
        }
    
        public function getYear() {
    
            return $this->year;
        }
    
        public function setYear($year) {
    
            $this->year = $year;
            
        }
    
        public function getKeywords() {
    
            return $this->keywords;
            
        }
    
        public function setKeywords($keywords) {
    
            $this->keywords = $keywords;
            
        }
    
        public function getWeight() {
    
            return $this->weight;
           
        }
    
        public function setWeight($weight) {
    
            $this->weight = $weight;
            
        }
    
        public function getDimensions() {
    
            return $this->dimensions;
            
        }
    
        public function setDimensions($dimensions) {
            
            $this->dimensions = $dimensions;
        }

        public function getPages() {
    
            return $this->pages;
            
        }
    
        public function setPages($pages) {
            
            $this->pages = $pages;
        }

        public function getPrice() {
    
            return $this->price;
            
        }
    
        public function setPrice($price) {
            
            $this->price = $price;
        }

        public function getPreview() {
    
            return $this->preview;
            
        }
    
        public function setPreview($preview) {
            
            $this->preview = $preview;
        }

        public function getIndex() {
    
            return $this->index;
            
        }
    
        public function setIndex($index) {
            
            $this->index = $index;
        }

        public function getCover() {
    
            return $this->cover;
            
        }
    
        public function setCover($cover) {
            
            $this->cover = $cover;
        }
    }


?>