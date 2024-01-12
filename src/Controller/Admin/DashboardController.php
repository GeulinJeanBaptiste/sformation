<?php

namespace App\Controller\Admin;

use App\Entity\Formation;
use App\Entity\Usersfixtures;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(FormationCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Nos formations')
            // ->renderContentMaximized() Remove the dashboard header and footer
            // ->renderSidebarMinimized() Remove the sidebar
            ;
    }

    public function configureMenuItems(): iterable
    {
        // yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);

        return [
            MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),
            MenuItem::linkToRoute('Back to the website', 'fa fa-home', 'homepage'),

            MenuItem::section('Formation'),
            MenuItem::linkToCrud('Formations', 'fa fa-list', Formation::class),

            MenuItem::section('Users'),
            MenuItem::linkToCrud('Users', 'fas fa-user', Usersfixtures::class),
        ];
    }
}
