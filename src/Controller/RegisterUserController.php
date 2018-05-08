<?php

namespace App\Controller;
use App\Form\RegisterType;
use App\Entity\Users;
use Symfony\Component\Asset\Package;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
class RegisterUserController extends Controller
{

  public function index(Request $request, UserPasswordEncoderInterface $passwordEncoder)
  {
    $register = new Users();
    $form = $this->createForm(RegisterType::class, $register);

    if($request->isMethod("post")){
      $form->handleRequest($request);
      if($form->isValid()){
        $password = $passwordEncoder->encodePassword($register, $register->getPlainPassword());
        $register->setPassword($password);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($register);
        $entityManager->flush();
        $this->addFlash("success", "The user {$register->getname()} has been added to the database");
        return $this->redirect($request->getUri());
      }
    }
    return $this->render("index.html.twig", array('form' => $form->createView()));
  }
}
