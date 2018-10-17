<?php

namespace App\Form\Analyzer;

use App\Entity\Analyzer\Analyzer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Routing\RouterInterface;

class AnalyzerType extends AbstractType
{
    public $router;

    public function __construct(RouterInterface $router) {
        $this->router = $router;
    }


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->setAction($this->router->generate('analyzer'))
            ->add('sentence', TextareaType::class)
            /*->add('save', ButtonType::class, array(
                'attr' => array('class' => 'save'),
            ))*/;
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Analyzer::class,
        ]);
    }
}
