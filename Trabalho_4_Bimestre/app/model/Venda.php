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
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\Table;
use Doctrine\Common\Collections\ArrayCollection;

#[Entity]
#[Table(name: 'venda')]
class Venda
{
    #[Id]
    #[Column(type: "integer"), GeneratedValue]
    private $id;
    #[Column(type: "decimal",precision: 10, scale: 2)]
    private $valor;
    #[Column(type: "date")]
    private $data;
    #[ManyToOne(targetEntity: Produto::class, cascade: ['persist', 'remove'], fetch: 'EAGER')]
    #[JoinColumn(name: "produto_id", referencedColumnName: 'id')]
    private $produto;
    #[Column(type: "string")]
    private $endereco;
    #[ManyToOne(targetEntity: Vendedor::class, cascade: ['persist', 'remove'], fetch: 'EAGER')]
    #[JoinColumn(name: "vendedor_id", referencedColumnName: 'id')]
    private $vendedor;

    function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    function __get($atributo)
    {
        return $this->$atributo;
    }
}
