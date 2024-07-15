<?php

namespace App\Filament\Pages\App;

use App\Filament\Actions\GeneratePasswordAction;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Pages\Auth\EditProfile;

class Profile extends EditProfile
{
    public function form(Form $form): Form
    {
        return $form->schema([
            Section::make()
                ->inlineLabel(false)
                ->schema([
                    $this->getNameFormComponent(),
                    $this->getEmailFormComponent(),
                    $this->getPasswordFormComponent()
                        ->suffixActions([
                            GeneratePasswordAction::make(),
                        ]),
                    $this->getPasswordConfirmationFormComponent(),
                ]),
        ]);
    }
}
