<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Feedback;

class FeedbackTableSeeder extends Seeder{

  public function run()
  {
    Feedback::create(
      [
        'usuario' => 'Jhonny deep',
        'content' => 'Contenido de los feedbacks'
      ]
    );
    Feedback::create(
      [
        'usuario' => 'Juan David',
        'content' => 'Repasando laravel en la versión 5.0'
      ]
    );
  }

}




 ?>
