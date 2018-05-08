<?php
namespace App\Form;
use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
class RegisterType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
    ->add("name", TextType::class, ['label' => "Name:"])
    ->add("surname", TextType::class, ['label' => "Surname:"])
    ->add("login", TextType::class, ['label' => "Login:"])
    ->add("plainPassword", RepeatedType::class, array(
      'type' => PasswordType::class,
      'first_options' => array('label' => 'Password:'),
      'second_options' => array('label' => 'Repeat Password:'),
    ))
    ->add("email", EmailType::class, ['label' => "E-mail:"])
    ->add("adress", TextType::class, ['label' => "Adress:"])
    ->add("postcode", TextType::class, ['label' => "Post Code:"])
    ->add("city", TextType::class, ['label' => "City:"])
    ->add("submit", SubmitType::class, array('label' => "Register User", 'attr' => array('class' => 'btn btn-primary')));
  }
  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults(["data_class" => Users::class]);
  }
}
