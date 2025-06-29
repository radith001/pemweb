# Footer

generate model, migrasi dan seeder footer dengan cara

php artisan make:model Footer -ms

## Migration

tambahin table footer

mysql
$table->string('footer');


lalu jalankan migrasi php artisan migrate

## Seeder

tambahin seeder footer

php
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Footer;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Footer::create([
            'footer' => '© 2023 All rights reserved. | Designed by Anraaa',
        ]);
    }
}


lalu sesuaikan dengan database seeder agar footer seeder dapat digenerate

php
<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        if(User::count()==0){

            $user = \App\Models\User::factory()->create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
            ]);

            $user->assignRole('super_admin');
        }

        $this->call([
            FooterSeeder::class,
        ]);
    }
}


setelah melakuka penyesuaian pada FooterSeeder.php dan DatabaseSeeder.php, jalankan perintah php artisan db:seeed

## Model

setelah seeder telah dikonfiguras, lalu lakukan penyesuaian pada model Footer yang ada di App/Model/Footer.php

php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Footer extends Model
{
    use HasFactory;

    protected $table = 'footers';
    protected $fillable = [
        'footer',
    ];
}


## Resource
Setelah model, lakukan generate resource untuk footer

php artisan make:filament-resource Footer --generate

lalu delete table created, updated at, dll menjadi

php
public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('footer')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }


## View

lalu ubah footer.blade.php agar datanya menjadi dinamis

blade
@php
    $footer = \App\Models\Footer::first();
@endphp


<footer class="section-sm bg-tertiary">
	<div class="container">
        <div class="container d-flex justify-content-center">
            <a wire:navigate href="{{ route ('home') }}"> {{$footer->footer }}</a>
        </div>
	</div>
</footer>


## Livewire

update juga pada app/http/livewire

php
<?php

namespace App\Livewire;

use App\Models\Footer;
use Livewire\Component;

class ShowHomePage extends Component {

    public $footer;

    public function mount()
    {
        $this->footer = Footer::first();
    }

    public function render()
    {
        return view('livewire.show-home-page', ['footer' => $this->footer]);
    }
}
