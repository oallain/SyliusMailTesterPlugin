<?php

declare(strict_types=1);

namespace Synolia\SyliusMailTesterPlugin\Form\Type;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;

final class SyliusPlusLoyaltyPurchaseCouponType extends AbstractType
{
    /** @var string */
    protected static $syliusEmailKey = 'sylius_plus_loyalty_purchase_coupon';

    /** @var string */
    private $syliusPromotionCouponClass;

    public function __construct(string $syliusPromotionCouponClass)
    {
        $this->syliusPromotionCouponClass = $syliusPromotionCouponClass;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        parent::buildForm($builder, $options);

        $builder
            ->add('promotionCoupon', EntityType::class, [
                'class' => $this->syliusPromotionCouponClass,
                'choice_label' => 'code',
            ])
        ;
    }
}
