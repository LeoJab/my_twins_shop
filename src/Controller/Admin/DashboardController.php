<?php

namespace App\Controller\Admin;

use App\Entity\Produit;
use App\Entity\Rubrique;
use App\Entity\SousRubrique;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
         return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('The Twins Shop');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Rubrique', 'fas fa-list', Rubrique::class);
        yield MenuItem::linkToCrud('Sous-Rubrique', 'fas fa-list', SousRubrique::class);
        yield MenuItem::linkToCrud('Produit', 'fas fa-list', Produit::class);
    }
}
