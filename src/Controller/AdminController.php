<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_ADMIN', statusCode: 423, exceptionCode: 10010)]
class AdminController extends AbstractController
{
    // Optionally, you can set a custom message that will be displayed to the user
    #[IsGranted('ROLE_SUPER_ADMIN', message: 'You are not allowed to access the admin dashboard.')]
    public function adminDashboard(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        // or add an optional message - seen by developers
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');

        return new Response('Admin Dashboard');
    }
}