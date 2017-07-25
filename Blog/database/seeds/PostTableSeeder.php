<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Post;

class PostTableSeeder extends Seeder{

    public function run()
    {
      Post::create(
        [
          'title' => 'Pioneros en Big Data',
          'content' => '
      “Estábamos presentes en el momento del
      nacimiento del big data en los Países Bajos. De ahí que en los últimos
      años hemos acumulado una enorme cantidad de conocimientos y experiencia sobre
      el desarrollo de avanzados algoritmos de autoaprendizaje en conjuntos de datos
      muy grandes y complejos, y en plataformas afines como Hadoop y Apache Spark.
      Esto significa que estamos en disposición de ayudar a nuestros clientes en la
      resolución de temas innovadores y disruptivos de big data. Ahora es el momento
      de hacer que esta experiencia sea más accesible para nuestros clientes,” explica
      Gert-Jan van Dijk, CEO de Target.
      Como consecuencia de este acuerdo, también se ha desarrollado una cartera accesible y completa
      de cursos de formación relacionados con el análisis de datos. El objetivo de esta cartera
      compartida es permitir la capacitación del personal de nuestros clientes, en lugar de que los
      clientes tengan que contratar recursos externos de manera estructural. El análisis y gestión de
      datos se están convirtiendo en una capacidad crítica de negocio que es primordial para las
      empresas.',
          'tags' => 'Laravel,tutorial,curso,201,big data',
          'photo' => 'http://www.codigonexo.com/wp-content/uploads/2016/01/Big-data-buzz-or-big-data-fuzz-blog-image1-1.jpg'
        ]
      );

      Post::create(
        [
          'title' => 'Capital Cell',
          'content' => '
                La plataforma de inversión Capital Cell ha recaudado 4,4 millones de euros
                en un total de 14 campañas de ‘crowfunding’ para diferentes proyectos de investigación
                relacionados con la salud y biomedicina. Con sede en Barcelona, opera desde diciembre
                de 2014 y ha trabajado en proyectos para desarrollar fármacos contra la esclerosis
                múltiple y otros programas relacionados con la salud. La firma operaba solo en el
                mercado español hasta marzo de este año, momento en el que se lanzó la plataforma de
                ‘crowfunding’ para la salud y biomedicina en el Reino Unido, después de lograr una
                ronda de inversión de 580.000 euros. Debido a este salto en Europa, Capital Cell
                prevé duplicar su facturación en 2017 respecto al ejercicio del año pasado,
                alcanzando así los 200.000 euros.',
          'tags' => 'Laravel,tutorial,curso,2017,segundo',
          'photo' => 'https://image.slidesharecdn.com/corporatedeckentrepreneurs-150105123438-conversion-gate01/95/capital-cell-corporate-deck-for-entrepreneurs-1-638.jpg?cb=1420473275'
        ]
      );
    }
}



 ?>
