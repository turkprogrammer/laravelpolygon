<?php

use Illuminate\Support\Facades\Route;

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/', function () {
    $directors = \App\Models\Director::all();
    $films = \App\Models\Film::all();
    $authors = \App\Models\Author::all();
    $books = \App\Models\Books::all();
    $cinemas = App\Models\Cinema::all();
    /**
     * возникает проблема в обратной связи Movies->Cinemas т.к. мы наполняли через фабрику рандомно cinema_movie.cinema_id ., 
     * не у всех фильмов есть кинотеатр,  и выводит фильм без кинотеатра поэтому как сделать проверку чтобы выводить фильм  который
     *  толко идет в показе
     */
    $movies = App\Models\Movie::has('cinemas')->get(); // Получить все фильмы, которые демонстрируются хотя бы 1 кинотеатре
    

    /**
     * Examples One-To-One
     */
    /* foreach ($directors as $director) {
      echo "Director name: " . $director['name']."</br>" ;
      echo "Film : " . $director->film['name']."</br>" ;
      echo "<hr/>";
      } */

    /* foreach ($films as $film) {
      echo "Film name: " . $film['name']."</br>" ;
      echo "Director : " . $film->director['name']."</br>" ;
      echo "<hr/>";
      } */

    /*
     * 
     * Examples One-to Many
     * 
     */


    /* foreach ($authors as $author) {
      echo "Author name: " . $author['name']."</br>" ;
      echo "<b>Authors books : </b>" . '<br/>';

      foreach ($author->books as $book) {
      echo $book['title'].'<br/>';
      }
      echo "<hr/>";
      } */

    /* foreach ($books as $book) {
      echo "Book title: " . $book['title'] . "</br>" ;
      echo "<b>Author : </b>" . $book->author['name'] . '<br/>';

      echo "<hr/>";
      } */

    /*
     * 
     * Examples Many-to Many
     */

    /*
     * Cinemas ->Movies
     */
    /* foreach ($cinemas as $cinema) {
      echo "Cinema: " . '<b>' . strtoupper($cinema['name']) . '</b>' . '<br/>';
      echo 'Movies:' . '<br/>';
      if (is_object($cinema)) {
      foreach ($cinema->movies as $movie) {
      echo $movie['name'] . '<br/>';
      }
      } else {
      throw new \Exception('Bad logic');
      }
      echo "<hr/>";
      } */
    /*
     * Movies->Cinemas
     */
    foreach ($movies as $movie) {
        echo "Movie name: " . '<b>' . strtoupper($movie['name']) . '</b>' . '<br/>';
        echo 'Cinemas:' . '<br/>';
        if (is_object($movie)) {
            foreach ($movie->cinemas as $cinema) {
                echo strtoupper($cinema['name']) . '<br/>';
            }
        } else {
            throw new \Exception('Bad logic');
        }
        echo "<hr/>";
    }
});
