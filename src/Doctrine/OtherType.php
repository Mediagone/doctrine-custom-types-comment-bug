<?php declare(strict_types=1);

namespace App\Doctrine;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;


final class OtherType extends Type
{
    public const NAME = 'other';
    
    
    public function getName() : string
    {
        return self::NAME;
    }
    
    
    /**
     * Gets the SQL declaration snippet for a field of this type.
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform) : string
    {
        return $platform->getIntegerTypeDeclarationSQL([]);
    }
    
    
    /**
     * Adds an SQL comment to typehint the actual Doctrine Type for reverse schema engineering.
     */
    public function requiresSQLCommentHint(AbstractPlatform $platform) : bool
    {
        return true;
    }
    
    
    /**
     * Converts a value from its database representation to its PHP representation of this type.
     *
     * @param int|null $value The value to convert.
     */
    public function convertToPHPValue($value, AbstractPlatform $platform) : ?int
    {
        if ($value === null) {
            return null;
        }
        
        return (int)$value;
    }
    
    
    /**
     * Converts a value from its PHP representation to its database representation of this type.
     *
     * @param int|null $value The value to convert.
     */
    public function convertToDatabaseValue($value, AbstractPlatform $platform) : ?int
    {
        return $value;
    }
    
    
    
}
