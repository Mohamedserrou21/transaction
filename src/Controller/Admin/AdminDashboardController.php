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
        return  $this->render('admin/index.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Fournisseur');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Gestion Agent', 'fa fa-address-book', Agent::class);
        yield MenuItem::linkToCrud('Clients', 'fa fa-id-badge', Client::class);
        yield MenuItem::linkToCrud('Fournisseur', 'fa fa-gears', Fournisseur::class);
        yield MenuItem::linkToCrud('Fourgon', 'fa fa-bus', Fourgon::class);
        yield MenuItem::linkToCrud('Remorque', 'fa fa-truck ', Remorque::class);
        yield MenuItem::linkToCrud('Parking', 'fa fa-car', Parking::class);
        yield MenuItem::linkToCrud('Transit', 'fa fa-check', Transaction::class);
    }
}
