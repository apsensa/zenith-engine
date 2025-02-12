<?php

declare(strict_types=1);

namespace Apsensa\ZenithEngine\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Apsensa\ZenithEngine\Entity\ProductAttribute;

class ProductAttributeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ProductAttribute::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('title'),
            AssociationField::new('productTemplate'),
            CollectionField::new('productValues')->hideOnIndex()->hideOnForm()
        ];
    }
}
