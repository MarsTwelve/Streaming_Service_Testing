<?php

class MovieRatingModel extends CI_Model{


    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function InsertMovieScore($movieData)
    {
        if (count($movieData) === 0)
        return 'No film data provided';

        $this->db->where('title', $movieData['title']);
        $query = $this->db->get('Movies');

        $row = $query->row();
        if (isset($row))
            $filmId = $row->id;

            $ParsedMovieArr = array(
                'score' => $movieData['score'],
                'movie_id' => $filmId);
                $this->db->insert("Movie_scores", $ParsedMovieArr);


    }

    public function GetMovieRatingAvg($movieData)
    {
        if (count($movieData) === 0)
        return 'No film data provided';

        $this->db->where('title', $movieData['movie_title']);
        $query = $this->db->get('Movies');
        
        if ($query->num_rows() === 0)
            return "$movieData[movie_title] was not found on the database";

        $row = $query->row();
        $filmId = $row->id;

        $this->db->where('movie_id', $filmId);
        $this->db->select_avg('score');
        $query = $this->db->get("Movie_scores");
        $result = $query->row();
        $formatted_result = number_format($result->score, 2, '.', '');
        return $formatted_result;

    }

    public function DeleteMovieRating($movieData)
    {
        if (count($movieData) === 0)
        return 'No film data provided';

        $this->db->where('id', $movieData['rating_id']);
        $query = $this->db->get('Movie_scores');

        if ($query->num_rows() === 0)
            return "$movieData[movie_title] was not found on the database";

        $this->db->delete('Movie_scores', array('id' => $movieData['rating_id']));

    }
}
