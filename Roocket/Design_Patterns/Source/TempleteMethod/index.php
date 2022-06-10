<?php

abstract class  Book
{
    private $title;
    private $content;

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    abstract  public function  view();

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

}

class PaperBook extends Book
{


    public function view()
    {
        return "the book {$this->getTitle()} was printed";
    }
}

class  EBook extends  Book
{

    public function view()
    {
        return "EBook {$this->getTitle()} was printed";
    }
}

$paperBook=new PaperBook();
$paperBook->setTitle('book');
echo $paperBook->view()."<br>";

$ebook=new EBook();
$ebook->setTitle("Ebook");
echo  $ebook->view();