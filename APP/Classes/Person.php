<?php



class Person
{
    private $name;
    private $age;
    private $genre;
      
    

    
    public function __construct($name , $age , $genre)
    {
        $this->name = $name;
        $this->age = $age;
        $this->genre = $genre;
        
    }

    public function readerDetails(){
        echo '<br/>';
        echo "Leitor: " . $this->getName() . '<br/>';
        echo "Idade: " . $this->getAge() . '<br/>';
        echo "Genero: " . $this->getGenres() . '<br/>';
    }
    
    
    public function getName()
    {
        return $this->name;
    }
    
    
    public function setName($name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    public function getAge()
    {
        return $this->age;
    }
    
    
    public function setAge($age)
    {
        $this->age = $age;
        
        return $this;
    }
    
    
    public function getGenres()
    {
        return $this->genre;
    }
    
    public function setGenres($genre)
    {
        $this->genre = $genre;
        
        return $this;
    }
    
    public function getReader()
    {
        return $this->reader;
    }
    

}










?>