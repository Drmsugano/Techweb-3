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
#[Table('vendedor')]
class Vendedor
{
    #[Id]
    #[Column(type: "integer"), GeneratedValue]
    private $id;
    #[Column(type: 'string')]
    private $nome;
    #[Column(type: 'string')]
    private $nivel;
    #[ManyToOne(targetEntity: Equipe::class, cascade: ['persist'], fetch: 'EAGER')]
    #[JoinColumn(name: "equipe_id", referencedColumnName: 'id')]
    private $equipe;
    #[OneToMany(targetEntity: Venda::class, mappedBy: "vendedor")]
    private $venda;

    function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    function __get($atributo)
    {
        return $this->$atributo;
    }
}
