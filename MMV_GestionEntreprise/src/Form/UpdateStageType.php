<?php
    namespace App\Form;

    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;
    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\Form\Extension\Core\Type\TextareaType;
    use Symfony\Component\Form\Extension\Core\Type\IntegerType;
    use Symfony\Bridge\Doctrine\Form\Type\EntityType;
    use App\Entity\Entreprise;

    class UpdateStageType extends AbstractType {
        
        public function buildForm(FormBuilderInterface $builder, array $options)
        {
            $builder->add('code', IntegerType :: class, array('label' => 'Code :'))
                    -> add('description', TextType :: class, array('label' => 'Description :'))
                    -> add('Modifier', SubmitType :: class);
        }
    }
?>