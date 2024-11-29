<?php

declare(strict_types=1);

namespace App\Entity\Product;

use Doctrine\ORM\Mapping as ORM;
use Gtt\SyliusProductSettingPlugin\Contract\Product\ProductQuantityMultiplierPromoAwareInterface;
use Gtt\SyliusProductSettingPlugin\Contract\Product\ProductQuantityMultiplierPromoAwareTrait;
use Sylius\Component\Core\Model\Product as BaseProduct;
use Sylius\Component\Product\Model\ProductTranslationInterface;

#[ORM\Entity]
#[ORM\Table(name: 'sylius_product')]
class Product extends BaseProduct implements ProductQuantityMultiplierPromoAwareInterface
{
    use ProductQuantityMultiplierPromoAwareTrait;

    protected function createTranslation(): ProductTranslationInterface
    {
        return new ProductTranslation();
    }
}
