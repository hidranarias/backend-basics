<?php

namespace Pyz\Yves\CustomerPage\Form;

use SprykerShop\Yves\CustomerPage\Form\FormFactory as SprykerFormFactory;
use Symfony\Component\Form\FormInterface;

class FormFactory extends SprykerFormFactory
{
    /**
     * @return FormInterface
     */
    public function getProfileForm(): FormInterface
    {
        return $this->getFormFactory()->create(ProfileForm::class);
    }
}
