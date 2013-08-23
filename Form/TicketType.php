<?php

namespace Liuggio\HelpDeskBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TicketType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('category', 'entity', array(
                'class'    => 'LiuggioHelpDeskBundle:Category',
                'label' => 'category_property'
        ))
            ->add('subject', 'text', array(
            'label' => 'subject_property',
            'required' =>true
        ))
            ->add('body', 'textarea', array(
            'label' => 'body_property',
                'required' =>true
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)    {
        $fixedOptions = array(
            'data_class' => 'Liuggio\HelpDeskBundle\Entity\Ticket',
        );
        $resolver->setDefaults($fixedOptions);
    }

    public function getName()
    {
        return 'liuggio_HelpDeskBundle_tickettype';
    }
}
