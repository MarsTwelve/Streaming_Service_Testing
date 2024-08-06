<?php

class MovieRating extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MovieRatingModel');
    }   

    public function index()
    {
        $this->load->view('ScreenMatchRating');
    }
    
    public function addMovieRating()
    {
        $this->load->view('AddMovieRating');
        $movieData = $this->input->post();
        $this->MovieRatingModel->InsertMovieScore($movieData);
    }

    public function readMovieRatingAvg()
    {
        $this->load->view('ReadMovieRatingAvg');
        $movieData = $this->input->get();
        $response = $this->MovieRatingModel->GetMovieRatingAvg($movieData);
        print_r($response);
    }

    public function removeMovieRating()
    {
        $this->load->view('DeleteMovieRating');
        $movieData = $this->input->get();
        $response = $this->MovieRatingModel->DeleteMovieRating($movieData);
        print_r($response);
    }
}