<?php
/**
 * Created by PhpStorm.
 * User: Jenaye
 * Date: 19/09/2016
 * Time: 15:34
 */

namespace Enaylal\Routing;


use SplDoublyLinkedList;

class RouteGroup
{
    private $lavevaiselle;
    private $prefix;

    public function __construct()
    {
        $this->prefix = "";
        $this->lavevaiselle = new SplDoublyLinkedList();
        $this->lavevaiselle->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);
    }

    public function generate(){
        $this->prefix = "";
        foreach ($this->lavevaiselle as $assiete){
            if(!empty($assiete['prefix'])) {
                $this->prefix .= $assiete['prefix'];
            }
        }
    }

    public function remove(){
        $this->lavevaiselle->pop();
        $this->generate();
    }

    public function add($prefix){
        $prefix = trim($prefix,'/').'/';
        $this->lavevaiselle->push(['prefix' => $prefix]);
        $this->generate();
    }

    /**
     * @return string
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * @param string $prefix
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;
    }




}