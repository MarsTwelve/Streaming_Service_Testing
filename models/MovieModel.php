<?php

class MovieModel extends CI_Model{

    public string $name;
    public int $launchYear;
    public float $scoreAverage;
    public string $genre;

    public function __construct(){
        parent::__construct();
        $this->load->database();

    }

    public function insertMovie($movieData){

        $this->db->where('title', $movieData['title']);
        $query = $this->db->get('Movies');

        if ($query->num_rows() > 0)
            return "$movieData[title] is already registered on the database";

        if ($movieData['premiumPlan'] == 'included')
            $movieData['premiumPlan'] = true;
    
        $ParsedMovieArr = array(
            'title' => $movieData['title'],
            'launch_year' => $movieData['year'],
            'premium_plan' => $movieData['premiumPlan'],
            'genre' => $movieData['genre']);
            $this->db->insert("Movies", $ParsedMovieArr);
            return $ParsedMovieArr;
    }

    public function searchMovie($movieData){
    
        $this->db->where('title', $movieData['movie_title']);
        $query = $this->db->get('Movies');

        if ($query->num_rows() === 0)
            return "$movieData[movie_title] was not found on the database";


        $row = $query->row();

        if (isset($row))
        {
            $result = ["title" => $row->title, 
                       "launch_year" => $row->launch_year,
                       "premium_plan" => $row->premium_plan,
                       "genre" => $row->genre];

            if ($result["premium_plan"] == 0)
                $result["premium_plan"] = "Not included";

            if ($result["premium_plan"] == 1)
                $result["premium_plan"] = "Included";

            return $result;
        }
   }

    public function getAllMovies(){

        $query = $this->db->get('Movies');

        foreach ($query->result() as $row)
        {
            $filmsFound[] = $row->title;
        }
        return $filmsFound;

    }

    public function delete($movieData){

        if (count($movieData) === 0)
            return 'No film data provided';

        $this->db->delete('Movies', array('title' => $movieData['movie_title']));
        $response = $this->db->affected_rows();
        return $response;
    }

}