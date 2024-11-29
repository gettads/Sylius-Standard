<?php

declare(strict_types=1);

namespace App\Entity\Product;

use Doctrine\ORM\Mapping as ORM;
use Gtt\SyliusProductSettingPlugin\Contract\ProductVariant\ProductVariantQuantityMultiplierAwareInterface;
use Gtt\SyliusProductSettingPlugin\Contract\ProductVariant\ProductVariantQuantityMultiplierAwareTrait;
use Sylius\Component\Core\Model\ProductVariant as BaseProductVariant;
use Sylius\Component\Product\Model\ProductVariantTranslationInterface;

#[ORM\Entity]
#[ORM\Table(name: 'sylius_product_variant')]
class ProductVariant extends BaseProductVariant implements ProductVariantQuantityMultiplierAwareInterface
{
    use ProductVariantQuantityMultiplierAwareTrait;

    protected function createTranslation(): ProductVariantTranslationInterface
    {
        return new ProductVariantTranslation();
    }
}
