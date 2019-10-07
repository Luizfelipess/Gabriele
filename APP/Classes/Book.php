<?php


require_once('Publication.php');


Class Book implements Publication
{
        private $title;
        private $author;
        private $totPages;
        private $currentPage;
        
        
        
        
        
        function __construct($title , $author , $totPages , $currentPage)
        {
                $this->setTitle($title);
                $this->setAuthor($author);
                $this->setTotPages($totPages);
                $this->setCurrentPage($currentPage);
                $this->endBook($currentPage , $totPages);
                
        }
        
        
        
        public function details()
        {
                echo '<br/>';
                echo "Livro: " . $this->getTitle() . '<br/>';
                echo "Autor: " . $this->getAuthor() . '<br/>';
                echo "Total de paginas: " . $this->getTotPages() . '<br/>';
                echo "Pagina atual: " . $this->getCurrentPage() . '<br/>';
                
        } 
        
        public function getTitle()
        {
                return $this->title;
        }
        
        
        public function setTitle($title)
        {
                $this->title = $title;
        }
        
        public function getAuthor()
        {
                return $this->author;
        }
        
        public function setAuthor($author)
        {
                $this->author = $author;
        }
        
        
        public function getTotPages()
        {
                return $this->totPages;
        }
        
        
        public function setTotPages($totPages)
        {
                $this->totPages = $totPages;
        }
        
        
        public function getCurrentPage()
        {
                return $this->currentPage;
        }
        
        public function setCurrentPage($currentPage)
        {
                $this->currentPage = $currentPage;
                
        }
        
        public function endBook($currentPage , $totPages)
        {
                if($currentPage < $totPages) {
                        echo "Faltam " . $paginas_restantes = $totPages - $currentPage . " paginas " . '<br/>';                        
                }else{
                        echo "Livro finalizado" . '<br/>';
                }
                
        }
        
        
        
        
}

?>