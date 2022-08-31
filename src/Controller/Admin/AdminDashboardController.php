<?php

namespace App\Controller\Admin;

use App\Entity\Agent;
use App\Entity\Client;
use App\Entity\Fourgon;
use App\Entity\Fournisseur;
use App\Entity\Parking;
use App\Entity\Remorque;
use App\Entity\Transaction;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminDashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Fournisseur');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Gestion Agent', 'fas fa-list', Agent::class);
        yield MenuItem::linkToCrud('Clients', 'fas fa-list', Client::class);
        yield MenuItem::linkToCrud('Fournisseur', 'fas fa-list', Fournisseur::class);
        yield MenuItem::linkToCrud('Fourgon', 'fas fa-list', Fourgon::class);
        yield MenuItem::linkToCrud('Remorque', 'fas fa-list', Remorque::class);
        yield MenuItem::linkToCrud('Parking', 'fas fa-list', Parking::class);
        yield MenuItem::linkToCrud('Transit', 'fas fa-list', Transaction::class);
    }
}
