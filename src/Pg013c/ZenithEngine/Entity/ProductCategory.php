<?php

declare(strict_types=1);

namespace Apsensa\ZenithEngine\Entity;

use Doctrine\ORM\Mapping as ORM;
use Apsensa\ZenithEngine\Repository\ProductCategoryRepository;

#[ORM\Entity(repositoryClass: ProductCategoryRepository::class)]
class ProductCategory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\ManyToOne(inversedBy: 'productCategories')]
    private ?ProductTemplate $productTemplate = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getProductTemplate(): ?ProductTemplate
    {
        return $this->productTemplate;
    }

    public function setProductTemplate(?ProductTemplate $productTemplate): static
    {
        $this->productTemplate = $productTemplate;

        return $this;
    }
}
