<?php

declare(strict_types=1);

namespace App\UI\Home;

use EFabrica\Services\PetStore;
use Nette;


final class HomePresenter extends Nette\Application\UI\Presenter
{
    #[Nette\DI\Attributes\Inject]
    public PetStore $petStore;
}
