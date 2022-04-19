<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\EmailVerifier;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    private EmailVerifier $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }

    #[Route('/api/register', name: 'app_register', methods: 'POST')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->submit(json_decode($request->getContent(), true, 512, JSON_THROW_ON_ERROR));

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
            $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('password')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();

            // generate a signed url and email it to the user
            $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
                (new TemplatedEmail())
                    ->from(new Address('radivoje.pupovac98@gmail.com', 'Support Name'))
                    ->to($user->getEmail())
                    ->subject('Please Confirm your Email')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
            );
            // do anything else you need here, like send an email

            return $this->json(null, Response::HTTP_CREATED);
        }

        /** @var FormError $error */
        foreach ($form->getErrors(true) as $error) {
            $errors['errors'][] = $error->getMessage();
        }

        return $this->json($errors ?? [], Response::HTTP_BAD_REQUEST);
    }

    //#[Route('/verify/email', name: 'app_verify_email')]
    //public function verifyUserEmail(Request $request, UserRepository $userRepository): Response
    //{
    //    $id = $request->get('id');
    //
    //    if (null === $id) {
    //        return $this->redirectToRoute('app_register');
    //    }
    //
    //    $user = $userRepository->find($id);
    //
    //    if (null === $user) {
    //        return $this->redirectToRoute('app_register');
    //    }
    //
    //    // validate email confirmation link, sets User::isVerified=true and persists
    //    try {
    //        $this->emailVerifier->handleEmailConfirmation($request, $user);
    //    } catch (VerifyEmailExceptionInterface $exception) {
    //        $this->addFlash('verify_email_error', $exception->getReason());
    //
    //        return $this->redirectToRoute('app_register');
    //    }
    //
    //    // @TODO Change the redirect on success and handle or remove the flash message in your templates
    //    $this->addFlash('success', 'Your email address has been verified.');
    //
    //    return $this->redirectToRoute('app_register');
    //}
}
