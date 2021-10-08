<?php declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;


/**
 * @Entity
 * @Table(name="`test`")
 */
class TestEntity
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    private int $id;
    
    
    /**
     * @Column(type="same")
     */
    private int $same;
    
    
    // This doctrine property is declared with  
    /**
     * @Column(type="different")
     */
    private int $other;
    
    
    
    
}
