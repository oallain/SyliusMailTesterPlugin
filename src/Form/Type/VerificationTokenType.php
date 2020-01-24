<?php

declare(strict_types=1);

namespace Synolia\SyliusMailTesterPlugin\Form\Type;

use Sylius\Component\Core\Model\Channel;
use Sylius\Component\Core\Model\ShopUser;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;

final class VerificationTokenType extends AbstractType
{
    /** @var string */
    protected static $syliusEmailKey = 'verification_token';

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        parent::buildForm($builder, $options);

        $builder
            ->add('channel', EntityType::class, [
                'class' => Channel::class,
            ])
            ->add('user', EntityType::class, [
                'class' => ShopUser::class,
            ])
        ;
    }
}