<?php

namespace SubjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlgoController extends Controller
{
    //////////////////////////////////////
    // Complète la fonction suivante //
    //////////////////////////////////////
    //

    /**
     * [dateInterval description]
     * Renvoie la plus grande distance entre deux séries
     * @param  array $series
     * @return integer
     */
/*    public function dateInterval ($series) {
        ksort($series);
        $year= 0;
        $result=[];
        foreach ($series as $key => $value) {
            if($year == 0){
                $year = $key;               
            }
            else{
                $result[]= $key - $year;
                $year = $key;
            }
        }
        $max = max($result);
        return $max;
    }
*/


    /**
     * [dateInterval description]
     * Renvoie la plus grande distance entre deux séries ==> ternaire
     * @param  array $series
     * @return integer
     */
 /*   public function dateInterval ($series) {
        ksort($series);
        $year = $result = 0;
        foreach ($series as $key => $value) {
            $result = $year != 0 ? ($key - $year >= $result ? $key - $year : $result) : null;
            $year = $key;
        }
        return $result;
    }
*/

    /**
     * [dateInterval description]
     * Renvoie la différence max entre deux series, ainsi que le titre et année des deux série
     * @param  array $series
     * @return array
     */
/*    public function dateInterval ($series) {
        ksort($series);
        $year = 0;
        $maxDiff = 0;

        $previous = array();
        $current = array();
        $result = array();
        $serie = '';

        foreach ($series as $key => $value) {
            if($year != 0){
                $diff = $key - $year;
                if ($diff >= $maxDiff) {

                    $result['previous']['serie'] = $serie;
                    $result['previous']['year'] = $year;
                    $result['next']['serie'] = $value;
                    $result['next']['year'] = $key;

                    $maxDiff = $diff;
                }
            }
            $serie = $value;
            $year = $key;
        }

        $result['maxDiff'] = $maxDiff;

        dump($result);
        return $result;
    }
*/
}
