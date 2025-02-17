<?php
namespace Model;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\InverseJoinColumn;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\Table;
use Doctrine\Common\Collections\ArrayCollection;

#[Entity]
#[Table(name: 'usuario')]
class Usuario
{

    #[Id]
    #[Column(type: "integer"), GeneratedValue]
    private $id;
    #[Column(type: "string")]
    private $nome;
    #[Column(type: "string")]
    private $usuario;
    #[Column(type: "string")]
    private $senha;

    /**
     * Método mágico
     */
    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    /**
     * Método mágico
     */
    public function __get($atributo)
    {
        return $this->$atributo;
    }

}